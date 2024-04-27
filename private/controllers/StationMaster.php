<?php

/**
 * profile controller
 */

class StationMaster extends Controller
{

    function index($id = '')
    {
        if (!Auth::is_logged_in() || !Auth::isUserType('station_master')) {
            $this->redirect('login');
        }

        $this->view('dashboard.stationmaster');
    }
    function trackTicket($id = '')
    {
        $reservation = new Reservations();
        $train = new Trains();
        $fare = new Fares();
        $compartment = new Compartments();

        $data = array();

        if (isset($_POST['reservation_ticket_id']) && !empty($_POST['reservation_ticket_id'])) {
            $data['reservations'] = $reservation->getReservationDataTicket($_POST['reservation_ticket_id']);

            if (!empty($data['reservations'])) { // Check if $data['reservations'] is not empty
                $train_type = $train->whereOne('train_id', $data['reservations'][0]->reservation_train_id);
                $data['train'] = $train->getTrain($data['reservations'][0]->reservation_train_id);
                $compartment_type = $compartment->whereOne('compartment_id', $data['reservations'][0]->reservation_compartment_id);
                $data['compartment'] = $compartment_type->compartment_class_type;

                $station = new Stations();
                $start_station = $station->whereOne('station_name', $data['reservations'][0]->reservation_start_station);
                $end_station = $station->whereOne('station_name', $data['reservations'][0]->reservation_end_station);
                $data['fares'] = $fare->getFareData($train_type->train_type, $compartment_type->compartment_class_type, $start_station->station_id, $end_station->station_id);

                // $data['refund'] = $reservation->getRefund($_POST['reservation_ticket_id'], $data['fares'][0]->fare_price);
            }
        }
        $this->view('tickettracking.stationmaster', $data);
    }


    function updateArrival($id = '')
    {
        /** */
        $train = new Trains();
        $data = array();
        $data['train'] = $train->whereOne('train_id', $id);

        if (isset($_POST['update'])) {
            try {
                $result = $train->updateStatus($id, $_POST);
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        $this->view('update.train.arrival');
    }

    function checkArrival($id = '')
{
    $train = new Trains();
    $data = array();

    $data['trains'] = $train->getAllTrainsByStation($_SESSION['USER']->user_data);

    if (isset($_POST['check'])) {

        $train_id =  $_POST['train_id'];
        $location_data = array(
            'train_id' => $train_id,
            'train_location' => Auth::getuser_data(),
            'date' => date('Y-m-d')
        );

        $trainlocation = new TrainLocation();
        if ($trainlocation->validate($location_data) === true) {
            // update the location
            $trainlocation->callProcedure('update_train_location', $location_data);

            // get passenger data in the next station
            $passenger = new Passengers();
            $passenger_data = $passenger->getPassengerDataOfNextStation($train_id, Auth::getuser_data());
            
            //get train data
            $train_data = $train->whereOne('train_id', $train_id);

            // send a mail to the passengers
            $this->notifyPassengers($train_data, $passenger_data, Auth::getuser_data());
            $this->redirect('stationmaster/checkArrival?success=1'); // Success case
        } else {
            $data = array_merge($data, $trainlocation->errors);
            $this->redirect('stationmaster/checkArrival?success=0'); // Failure case
        }
    }

    $this->view('check.train.arrival', $data);
}


    // function updateTrainStatus($id = '')
    // {
    //     $train = new Trains();
    //     $train->updateStatus();
    // }

    function waitList()
    {

        $waitinglist = new WaitingLists();
        $data = array();
        $data['waitinglist'] = $waitinglist->getWaitingList();

        $this->view('view.waitinglist', $data);
    }

    function manageSchedule($id = '')
    {
        $train = new Trains();
        $data = array();

        $data['trains'] = $train->getAllTrainsByStation($_SESSION['USER']->user_data);

        //echo "<pre>";
        //print_r($data);
        //echo "</pre>"; 

        $this->view('manage.schedule', $data);
    }
    private function notifyPassengers($train, $passenger_data, $station_id)
    {
        // send a mail to the passengers
        if ($passenger_data) {
            $station = new Stations();
            $station_data = $station->whereOne('station_id', $station_id);

            foreach ($passenger_data as $passenger) {
                $to = $passenger->reservation_passenger_email;
                $subject = 'Train Location Update';

                // add the train data and the station data to make the message
                $message = "The {$train->train_name} train has arrived at the station " . $station_data->station_name . " at " . date('Y-m-d H:i:s') . ".
                 <br>The train is now at the station " . $station_data->station_name . " and will be leaving soon.
                 Thank you for choosing our service.";

                $body = Auth::getEmailBody($passenger->reservation_passenger_first_name, $message);

                $this->sendMail($to, $passenger->reservation_passenger_first_name, $subject, $body);
            }
            return true;
        }
        return false;
    }

    function getInquiry(){
        $inquiry = new Inquiries();
        $data = array();
        $data['inquiries'] = $inquiry->getStationInquiry();
         $this->view('view.inquiry', $data);
        // echo json_encode($data);
    }
}

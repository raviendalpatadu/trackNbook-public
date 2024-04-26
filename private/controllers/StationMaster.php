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



        $train = new Trains();
        $data = array();

        if ($id != '' && $station_master_id != '') {
            $data = array(
                'station_id' => $id,
                'station_master_id' => Auth::getUser_id()
            );

            $_SESSION['station_master'] = $data;
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

                if ($result != 1 && array_key_exists('errors', $result)) {
                    $data['errors'] = $result['errors'];
                }
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
            $train_id = $_POST['train_id'];
    
            // Check if location for this train is already updated
            $trainLocation = new TrainLocation();
            $location = $trainLocation->whereOne('train_id', $train_id, 'date', date('Y-m-d'));
    
            if (empty($location)) {
                // If location not updated, update it
                $station_id = $_SESSION['USER']->working_station_id; // Assuming you have stored the working station id in session
                $location_data = array(
                    'train_id' => $train_id,
                    'train_location' => $station_id,
                    'date' => date('Y-m-d')
                );
    
                $trainLocation->callProcedure('update_train_location', $location_data);
    
                // Notify passengers
                $passenger = new Passengers();
                $passenger_data = $passenger->getPassengerDataOfNextStation($train_id, $station_id);
                $this->notifyPassengers($train_id, $passenger_data, $station_id);
    
                $this->redirect('stationmaster/checkArrival?success=1');
            } else {
                // Location already updated
                $this->redirect('stationmaster/checkArrival?error=1');
            }
        }
         
    
        $this->view('check.train.arrival', $data);
    }
    

    
    function updateTrainStatus($id = '')
    {
        $train = new Trains();
        $train->updateStatus();
    }

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
    



}
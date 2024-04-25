<?php

/**
 * profile controller
 */

class StationMaster extends Controller
{

    function index($id = '')
    {

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

function stationid($id = '')
    {
       

        // if session is set redirect to train driver page
        if (isset($_SESSION['station_master'])) {
            $data = $_SESSION['station_master'];
            if ($data['station_id'] != Auth::getStation_id() && $data['station_master_station'] != $id) {
                $this->redirect('stationmaster/index/' . $data['station_master_station'] . '/' . Auth::getStation_id());
            }
        }


        $this->view('option.stationmaster');
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

    function checkarrival($id = '')
    {
        $train = new Trains();
        $data = array();

        $data['trains'] = $train->getAllTrainsByStation($_SESSION['USER']->user_data);

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

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
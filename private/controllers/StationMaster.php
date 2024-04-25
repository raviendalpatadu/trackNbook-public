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

        $this->view('tickettracking.stationmaster');
    }
    function updateArrival($id)
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

        $data['trains'] = $train->findAllTrains();

        //echo "<pre>";
        //print_r($data);
        //echo "</pre>"; 

        $this->view('manage.schedule', $data);
    }

    



}
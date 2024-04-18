<?php

/**
 * profile controller
 */

class StationMaster extends Controller
{
    function index($id = '')
    {

        $this->view('check.train.arrival');
    }
    function updateArrival($id = '')
    {
       /** */ $train = new Trains();
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
    function updateTrainLocation($id = '')
    {

        $this->view('update.train.location');
    }

    function checkarrival($id = '')
    {
        $train = new Trains();
        $data = array();

        $data['trains'] = $train->findAllTrains();


        $this->view('check.train.arrival', $data);
    }

    function updateTrainStatus($id = '')
    {
        $train = new Trains();
        $train->updateStatus();
    }



}
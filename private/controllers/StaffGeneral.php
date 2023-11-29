<?php

/**
 * profile controller
 */

class StaffGeneral extends Controller
{
    function index($id = '')
    {

        $this->view('staff_general.dashboard');
    }

    function manageSchedule($id = '')
    {

        $this->view('manage.schedule');
    }

    function updateSchedule($id = '')
    {

        $this->view('update.schedule');
    }

    function addSchedule($id = '')
    {

        $this->view('add.schedule');
    }
    function waitList($id = '')
    {

        $this->view('view.waitinglist');
    }

    function getTrainList($id = '')
    {
        $train = new Trains();
        $data = array();

        $data['trains'] = $train->findAllTrains();


        $this->view('view.trainlist.staffgeneral', $data);
    }

    function updateTrain($id = '')
    {
        $train = new Trains();
        $data = array();

        $data['train'] = $train->whereOne('train_id', $id);

        $station = new Stations();
        $data['stations'] = $station->getStations();

        $route = new Routes();
        $data['routes'] = $route->findAll();

        if (isset($_POST['update'])) {
            try {
                $result = $train->updatetrain($id, $_POST);

                if ($result != 1 && array_key_exists('errors', $result)) {
                    $data['errors'] = $result['errors'];

                    $this->view('update.train.staffgeneral', $data);
                } else {
                    $this->redirect('StaffGeneral/getTrainList');
                }
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }else{
            $this->view('update.train.staffgeneral', $data);
        }
    }

    function deleteTrain($id = '')
    {
        $train = new Trains();
        $data = array();

        // if(isset($_POST['delete'])){
        try {
            $result = $train->delete($id, "train_id");
            $this->redirect('StaffGeneral/getTrainList');
        } catch (Exception $e) {
            die($e->getMessage());
        }
        // }
    }

}
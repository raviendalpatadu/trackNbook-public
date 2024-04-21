<?php

/**
 * profile controller
 */

class TrainDriver extends Controller
{
    function index($id = '')
    {

        $this->view('train_driver.dashboard');
    }
    function trainDelay($id = '')
    {

        $this->view('update.train.delay');
    }
    function updateLocation($id = '')
    {
        $train = new Trains();
        $data = array();
        $data['train'] = $train->whereOne('train_id', $id);

        $this->view('update.location');
    }



    function addLocation($id='')
    {
        $train = new Trains();
        $data = array();
        $data['train'] = $train->findTrain($id)[0];

        $train_stop_station = new TrainStopStations();
        $data['train_stop_stations'] = $train_stop_station->getTrainStopStationNames($id);

        $this->view('add.location', $data);
    }

    function scanLocation($id = '')
    {

        $this->view('scan.train.location');
    }

    function qr()
    {
        $this->view('QRSearch.traindriver');
    }

    function idoption($id = '')
    {
         
        $this->view('option.traindriver');
    }

}
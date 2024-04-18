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

        $this->view('update.location');
    }
    function addLocation($id = '')
    {

        $this->view('add.location');
    }

    function scanLocation($id = '')
    {

        $this->view('scan.train.location');
    }

    function qr()
    {
        $this->view('QRSearch.traindriver.view');
    }

}
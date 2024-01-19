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
    function scanLocation($id = '')
    {

        $this->view('scan.train.location');
    }

}
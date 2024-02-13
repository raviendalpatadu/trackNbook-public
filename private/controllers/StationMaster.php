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

        $this->view('update.train.arrival');
    }
    function updateTrainLocation($id = '')
    {

        $this->view('update.train.location');
    }


}
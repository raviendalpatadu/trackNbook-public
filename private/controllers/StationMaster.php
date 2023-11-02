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

    function updateLocation($id = '')
    {

        $this->view('update.train.location');
    }

}
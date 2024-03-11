<?php

/**
 * home controller
 */

class Station extends Controller
{
    function index($id = '')
    {
        $this->view('track');
    }


    function addStation($id = '')
    {
        $data = array();
        $station = new Stations();

        if (isset($_POST['station_id'])) {
            // Instantiate the $station variable
            $data = $station->addStation();
        }

        $this->view('add.station.admin', $data);
    }

}
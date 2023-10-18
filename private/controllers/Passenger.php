<?php

/**
 * profile controller
 */

class Passenger extends Controller
{
    function index($id = '')
    {
         
        $this->view('create.passenger.account');
    }

    function details($id = '')
    {
        $passenger = new Passengers();
        $data = array();
        $data = $passenger->getPassengers();
        $this->view('passenger.details', $data);
    }

}
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
        $this->view('passenger.details');
    }

}
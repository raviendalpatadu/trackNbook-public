<?php

/**
 * home controller
 */

class Reservation extends Controller
{
    function add($id = '')
    {   
        $this->view('');
    }

    function getReservation($id = '')
    {
        $reservation = new Reservations();
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
    }

    public function scan($id = '')
    {
        
    }
}

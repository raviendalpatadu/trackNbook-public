<?php

/**
 * TicketChecker controller
 */

class TicketChecker extends Controller
{
    function index($id = '')
    {
         
        $this->view('ticket_checker.dashboard');
    }

    function reservationList($id = '')
    {
         
        $this->view('reservation.ticketchecker');
    }

    function option($id = '')
    {
         
        $this->view('option.ticketchecker');
    }


}

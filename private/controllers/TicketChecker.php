<?php

/**
 * TicketChecker controller
 */

class StaffTicketing extends Controller
{
    function index($id = '')
    {
         
        $this->view('dashboard.ticketchecker');
    }

    function reservationList($id = '')
    {
         
        $this->view('reservation.staffticketing');
    }

}

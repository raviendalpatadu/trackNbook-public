<?php

/**
 * staffticketing controller
 */

class StaffTicketing extends Controller
{
    function index($id = '')
    {
         
        $this->view('staff_ticketing.dashboard');
    }

    function pay($id = '')
    {
         
        $this->view('ticket.staffticketing');
    }

    function summary($id = '')
    {
         
        $this->view('summary.staffticketing');
    }

    function reservationList($id = '')
    {
         
        $this->view('reservation.staffticketing');
    }

    function verifyWarrants($id = '')
    {
         
        $this->view('warrants.staffticketing');
    }

    function seatMap($id = '')
    {
         
        $this->view('seatmap.staffticketing');
    }

}

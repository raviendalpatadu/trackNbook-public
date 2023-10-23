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

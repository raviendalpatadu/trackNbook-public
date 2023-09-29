<?php

/**
 * staffticketing controller
 */

class StaffTicketing extends Controller
{
    function index($id = '')
    {
         
        $this->view('dashboard.staffticketing');
    }

    function reservationList($id = '')
    {
         
        $this->view('reservation.staffticketing');
    }

}

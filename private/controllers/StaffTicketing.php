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

    function Warrants($id = '')
    {
         
        $this->view('warrants.staffticketing');
    }

    function display($id = '')
    {
         
        $this->view('display.warrant.staffticketing');
    }

    function seatMap($id = '')
    {
         
        $this->view('seatmap.staffticketing');
    }

    function cancel($id = '')
    {
         
        $this->view('cancelation.staffticketing');
    }

    function refund($id = '')
    {
         
        $this->view('refund.staffticketing');
    }

    function trainstaff($id = '')
    {
         
        $this->view('trains.staffticketing');
    }

    function passenger($id = '')
    {
         
        $this->view('passenger.staff.staffticketing');
    }

    
}

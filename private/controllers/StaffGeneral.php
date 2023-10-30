<?php

/**
 * profile controller
 */

class StaffGeneral extends Controller
{ 
    function index($id = '')
    {
         
        $this->view('dashboard.staffgeneral');
    }

    function manageSchedule($id = '')
    {
         
        $this->view('manage.schedule');
    }

    function updateSchedule($id = '')
    {
         
        $this->view('update.schedule');
    }

    function addSchedule($id = '')
    {
         
        $this->view('add.schedule');
    }

}

<?php

/**
 * profile controller
 */

class StaffGeneral extends Controller
{
    function index($id = '')
    {

        $this->view('staff_general.dashboard');
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
    function waitList($id = '')
    {

        $this->view('view.waitinglist');
    }

}
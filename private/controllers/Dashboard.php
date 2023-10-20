<?php

/**
 * home controller
 */
class Dashboard extends Controller
{
    function index($id = '')
    {   
        $this->view('dashboard');
    }
    function admin($id = '')
    {   
        $this->view('admin.dashboard');
    }

    //to be made
    function staff_general($id = '')
    {   
        $this->view('staff_general.dashboard');
    }
    //to be made
    function staff_ticketing($id = '')
    {   
        $this->view('staff_ticketing.dashboard');
    }
    //to be made
    function train_driver($id = '')
    {   
        $this->view('train_driver.dashboard');
    }
    //to be made
    function station_master($id = '')
    {   
        $this->view('station_master.dashboard');
    }

}

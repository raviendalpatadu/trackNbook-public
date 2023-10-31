<?php

/**
 * home controller
 */
class Dashboard extends Controller
{
    function index($id = '')
    {   
        if(Auth::is_logged_in()){
            $this->view('dashboard');
        }else{
            $this->redirect('login');
        }
       
    }
    function admin($id = '')
    {   
        // if(Auth::is_logged_in()){
            $this->view('admin.dashboard');
        // }else{
        //     $this->view('login');
        // }
    }

    //to be made
    function staff_general($id = '')
    {   
        if(Auth::is_logged_in()){
            $this->view(' staff_general.dashboard');
        }else{
            $this->view('login');
        }
    }
    //to be made
    function staff_ticketing($id = '')
    {  
        if(Auth::is_logged_in()){
            $this->view('staff_ticketing.dashboard');
        }else{
            $this->view('login');
        } 
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

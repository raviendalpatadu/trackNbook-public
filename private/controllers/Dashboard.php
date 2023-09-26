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
}

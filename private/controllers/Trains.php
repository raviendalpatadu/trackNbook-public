<?php

/**
 * home controller
 */


class Trains extends Controller
{
    function index($id = '')
    {   
        $this->view('trains');
    }
    
    function available($id = '')
    {   
        $this->view('trains.available');
    }
}

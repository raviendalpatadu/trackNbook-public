<?php

/**
 * home controller
 */

class user extends Controller
{
    function index($id = '')
    {
         
        $this->view('home');
    }

    
}

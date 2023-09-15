<?php

/**
 * home controller
 */

class Home extends Controller
{
    function index($id = '')
    {
         
        $this->view('home');
    }
}

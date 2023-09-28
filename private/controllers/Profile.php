<?php

/**
 * profile controller
 */

class Profile extends Controller
{
    function index($id = '')
    {
         
        $this->view('profile');
    }

}

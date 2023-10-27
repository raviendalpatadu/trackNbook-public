<?php

/**
 * profile controller
 */

class TrainDriver extends Controller
{
    function index($id = '')
    {
         
        $this->view('dashboard.traindriver');
    }

}

<?php

/**
 * profile controller
 */

class StationMaster extends Controller
{
    function index($id = '')
    {
         
        $this->view('check.train.arrival');
    }

}

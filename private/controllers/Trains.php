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

    function editTrain($id = '')
    {   
        $this->view('edit.trains');
    }
}

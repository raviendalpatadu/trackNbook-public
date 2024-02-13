<?php

/**
 * profile controller
 */

class TrainDriver extends Controller
{
    function index($id = '')
    {

        $this->view('train_driver.dashboard');
    }
    function trainDelay($id = '')
    {

        $this->view('update.train.delay');
    }
<<<<<<< HEAD
    function updateLocation($id = '')
    {

        $this->view('update.location');
    }
    function addLocation($id = '')
    {

        $this->view('add.location');
    }

=======
>>>>>>> 6c81745cf8ea3b5c2d4f8d9dfeb033bace3d5e1e
    function scanLocation($id = '')
    {

        $this->view('scan.train.location');
    }
<<<<<<< HEAD

    function qr()
    {
        $this->view('QRSearch.traindriver.view');
    }
=======
>>>>>>> 6c81745cf8ea3b5c2d4f8d9dfeb033bace3d5e1e

}
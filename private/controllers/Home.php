<?php

/**
 * home controller
 */

class Home extends Controller
{
    function index($id = '')
    {
        $station = new Stations();
        $data = array();
        $data['stations'] = $station->getStations();
        
        if(isset($_SESSION['errors'])){
            $data['errors'] = $_SESSION['errors'];
            unset($_SESSION['errors']);
        }
        
        $this->view('home', $data);
    }

}

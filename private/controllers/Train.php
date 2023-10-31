<?php

/**
 * home controller
 */


class Train extends Controller
{
    function index($id = '')
    {   
        $this->view('trains');
    }

    function available($id = '')
    {   
        $station = new Stations();
        $data = array();
        $data['stations'] = $station->getStations();

        if (isset($_POST['to_station']) && isset($_POST['from_station']) && isset($_POST['from_date'])) {
            $train = new Trains();
            $data['trains_available'] = $train->search();

            if(array_key_exists('errors',$data['trains_available'])){
                $_SESSION['errors'] = $data['trains_available']; 
                // print_r($_SESSION['errors']);
                $this->redirect('home');    
            }else{
                $this->view('trains.available', $data['trains_available']);
            }
        }
        
    }

    function seatsAvailable($id = '')
    {
        $this->view('seats.available');
    }

    function track($id = '')
    {
        $this->view('track');
    }

    function add($id = ''){
        $this->view('add.trains');
    }
}

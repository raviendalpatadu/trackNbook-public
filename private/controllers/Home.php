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

        if (isset($_SESSION['reservation'])) {
            unset($_SESSION['reservation']);
        }

        if (isset($_SESSION['errors'])) {
            $data['errors'] = $_SESSION['errors'];
            unset($_SESSION['errors']);
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' || isset($_POST['submit'])) {
            $home = new Homes();

            if ($home->validate($_POST) == false) {

                // concat 2 arrays
                $data = array_merge($data, $home->errors);
                $this->view('home', $data);
            } else {

                $data['from_date'] = $_POST['from_date'];
                $data['from_station'] = $station->getOneStation('station_id', $_POST['from_station']);
                $data['to_station'] = $station->getOneStation('station_id', $_POST['to_station']);
                $data['no_of_passengers'] = $_POST['no_of_passengers'];

                $_SESSION['reservation'] = $data;

                $this->redirect('train/available');
            }
        } else {
            $this->view('home', $data);
        }
    }

    function validate(){

        $home = new Homes();
        
        if($home->validate($_POST)):
            echo json_encode(true);
        else:
            echo json_encode($home->errors);
        endif;
    }
}

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
        $data['trains_avilable'] = array();

        if (isset($_POST['to_station']) && isset($_POST['from_station']) && isset($_POST['from_date'])) {
            $train = new Trains();
            $data['trains_available'] = $train->search();

            if (array_key_exists('errors', $data['trains_available'])) {
                $_SESSION['errors'] = $data['trains_available'];
                // print_r($_SESSION['errors']);
                $this->redirect('home');
            } else {
                $this->view('trains.available', $data['trains_available']);
            }
        }

    }

    function seatsAvailable($class_id = '', $train_id = '')
    {
        if (isset($_POST['selected_seats'])) {
            $_SESSION['reservation']['selected_seats'] = $_POST['selected_seats'];
            
            $this->redirect('passenger/details');
        }

        $date = $_SESSION['reservation']['from_date'];
        $date = date('Y-m-d', strtotime($date));


        $train = new Trains();
        if (isset($class_id) && isset($train_id) && isset($_SESSION['reservation'])) {
            $_SESSION['reservation']['class_id'] = $class_id;
            $_SESSION['reservation']['train_id'] = $train_id;

            $data = $train->getTrainReservation($class_id, $train_id);

            $station = new Stations();

            $from_station = $station->getOneStation('station_id', $_SESSION['reservation']['from_station']);
            $to_station = $station->getOneStation('station_id', $_SESSION['reservation']['to_station']);
    
            $_SESSION['reservation']['start_station'] = $from_station;
            $_SESSION['reservation']['end_station'] = $to_station;

            $this->view('seats.available', $data);
        }
        else{
            $this->view('seats.available');
        }

        // $this->view('seats.available');
    }

    function track($id = '')
    {
        $this->view('track');
    }

    public function add()
    {
        $station = new Stations();
        $data = array();
        $data['stations'] = $station->getStations();

        $route = new Routes();
        $data['routes'] = $route->findAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['train_name'])) {
            $trainData = [
                'train_name' => $_POST['train_name'],
                'train_route' => $_POST['train_route'],
                'start_station' => $_POST['start_station'],
                'end_station' => $_POST['end_station'],
                'start_time' => $_POST['start_time'],
                'end_time' => $_POST['end_time'],
                'train_type' => $_POST['type'],
            ];

            $train = new Trains($this->connect()); // You may need to adjust this part to properly initialize the Train model.
            $result = $train->addTrain($trainData);

            if ($result === true) {
                $this->redirect('services/manage');
                echo 'Data received and added successfully';
            } else {
                $data['errors'] = $result;
            }
        }

        $this->view('add.trains', $data);
    }
}
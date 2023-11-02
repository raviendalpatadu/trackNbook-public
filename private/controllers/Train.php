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

            if (array_key_exists('errors', $data['trains_available'])) {
                $_SESSION['errors'] = $data['trains_available'];
                // print_r($_SESSION['errors']);
                $this->redirect('home');
            } else {
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
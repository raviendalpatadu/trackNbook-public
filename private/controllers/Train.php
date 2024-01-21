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
        // $data['trains_avilable'] = array();

        if (isset($_POST['to_station']) && isset($_POST['from_station']) && isset($_POST['from_date'])) {
            $train = new Trains();
            $data['trains_available'] = $train->search();
            // echo '<pre>';
            // print_r($data['trains_available']);
            // echo '</pre>';

            $data['from_date'] = $_POST['from_date'];
            $data['from_station'] = $station->getOneStation('station_id', $_POST['from_station'])->station_name;
            $data['to_station'] = $station->getOneStation('station_id', $_POST['to_station'])->station_name;

            if (array_key_exists('errors', $data['trains_available'])) {
                $_SESSION['errors'] = $data['trains_available'];
                // print_r($_SESSION['errors']);
                $this->redirect('home');
            } else {

                $_SESSION['reservation'] = $_POST;

                $this->view('trains.available', $data);
            }
        }
    }

    function seatsAvailable($class_id = '', $train_id = '')
    {


        if (isset($_POST['selected_seats'])) {
            $_SESSION['reservation']['selected_seats'] = $_POST['selected_seats'];

            $this->redirect('passenger/details');
        }

        // $date = $_SESSION['reservation']['from_date'];
        // $date = date('Y-m-d', strtotime($date));


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

            $train_type = $train->where('train_id', $train_id);

            $_SESSION['reservation']['train_type'] = $train_type[0]->train_type;

            $compartment = new Compartments();
            $compartmentObj = $compartment->whereOne('compartment_id', $class_id);

            $_SESSION['reservation']['class_type'] = $compartmentObj->compartment_class_type;

            $this->view('seats.available', $data);
        } else {
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

        $data = array();

        $route = new Routes();
        $data['routes'] = $route->findAll();
        //get route stations

        $compartment_types = new CompartmentTypes();
        $data['compartment_types'] = $compartment_types->findAll();

        $train_type = new TrainTypes();
        $data['train_types'] = $train_type->findAll();

        if (isset($_POST['submit'])) {

            $train = new Trains(); // You may need to adjust this part to properly initialize the Train model.
            $result = $train->addTrain();


            if ($result) {
                $this->redirect('train/add');
                // echo 'Data received and added successfully';
            } else {
                $data['errors'] = $result;
            }
        }

        $this->view('add.trains', $data);
    }
}

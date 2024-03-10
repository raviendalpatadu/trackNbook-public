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

    function trainsAvailableValidate()
    {
        if (!isset(Auth::reservation()['from_date']) || !isset(Auth::reservation()['from_station']) || !isset(Auth::reservation()['to_station']) || !isset(Auth::reservation()['no_of_passengers'])) {
            $this->redirect('/home');
        }

        $train = new Trains();
        if ($train->trainsAvailableValidate($_POST)) :
            echo json_encode(true);
        else :
            echo json_encode($train->errors);
        endif;
    }

    function available($id = '')
    {
        if (!isset(Auth::reservation()['from_date']) || !isset(Auth::reservation()['from_station']) || !isset(Auth::reservation()['to_station']) || !isset(Auth::reservation()['no_of_passengers'])) {
            $this->redirect('/home');
        }

        $station = new Stations();
        $data = array();

        $train = new Trains();
        if (isset($_POST['proceed'])) {
            $_SESSION['reservation']['from_compartment_and_train'] = mb_split('-', $_POST['from_compartment_and_train']);
            if (isset($_POST['to_compartment_and_train'])) {
                $_SESSION['reservation']['to_compartment_and_train'] = mb_split('-', $_POST['to_compartment_and_train']);
            }

            die("<h1>shdajhdsa</h1>");
            echo "<h1>shdajhdsa</h1>";
        }


        if (isset($_POST['submit'])) {
            $data['from_date'] = $_POST['from_date'];
            $data['from_station'] = $station->getOneStation('station_id', $_POST['from_station']);
            $data['to_station'] = $station->getOneStation('station_id', $_POST['to_station']);
            $data['no_of_passengers'] = $_POST['no_of_passengers'];

            if (isset($_POST['to_date'])) {
                $data['to_date'] = $_POST['to_date'];
            }

            $_SESSION['reservation'] = $data;
        }
        $data = $_SESSION['reservation'];

        $data['stations'] = $station->findAll();

        if (isset($data['to_date']) && $data['to_date'] != '') {
            $inverse_search['from_station'] = $data['to_station'];
            $inverse_search['to_station'] = $data['from_station'];
            $inverse_search['from_date'] = $data['to_date'];
            $inverse_search['no_of_passengers'] = $data['no_of_passengers'];
            $data['trains_available']['to_trains'] = $train->search($inverse_search);
        }

        $data['trains_available']['from_trains'] = $train->search($_SESSION['reservation']);

        // $train_count = 0;
        // foreach ($data['trains_available']['from_trains'] as $key => $value) {
        //     if ($key > 0) {
        //         if ($value->train_id != $data['trains_available']['from_trains'][$key - 1]->train_id) {
        //             $train_count++;
        //         }
        //     } else {
        //         $train_count++;
        //     }
        // }




        $this->view('trains.available', $data);
    }

    function availableNew($id = '')
    {
        $station = new Stations();
        $data = array();
        // $data['trains_avilable'] = array();

        $data['stations'] = $station->findAll();

        $this->view('trains.available.new', $data);
    }

    function seatsAvailable($class_id, $train_id)
    {
        if (!Auth::reservation()) {
            $this->redirect('/home');
        }

        $data = array();


        $seatData = array();

        $seatData['reservation_train_id'] = $train_id;
        $seatData['reservation_compartment_id'] = $class_id;
        $seatData['reservation_date'] = Auth::reservation()['from_date'];
        $seatData['reservation_start_station'] = Auth::reservation()['from_station']->station_id;
        $seatData['reservation_end_station'] = Auth::reservation()['to_station']->station_id;

        $train = new Trains();
        $data['train'] = $train->whereOne('train_id', $train_id);

        $seat = new Seats();
        $data['reservation_seats'] = $seat->getReservedSeats($seatData);

        $compartment = new Compartments();
        $data['compartment'] = $compartment->whereOne('compartment_id', $class_id);

        $compartment_types = new CompartmentTypes();
        $data['compartment_type'] = $compartment_types->whereOne('compartment_class_type_id', $data['compartment']->compartment_class_type);

        $fare =  new Fares();
        $data['fare'] = $fare->getFareData($data['train']->train_type, $data['compartment']->compartment_class_type, Auth::reservation()['from_station']->station_id, Auth::reservation()['to_station']->station_id)[0]; //get from db must be changed


        if (isset($_POST['submit'])) {

            $reservation = new Reservations();

            $reservationData = array();
            $reservationData['reservation_passenger_id'] = Auth::user_id();
            $reservationData['reservation_train_id'] = $data['train']->train_id;
            $reservationData['reservation_compartment_id'] = $class_id;
            $reservationData['reservation_start_station'] = Auth::reservation()['from_station']->station_id;
            $reservationData['reservation_end_station'] = Auth::reservation()['to_station']->station_id;
            $reservationData['reservation_date'] = Auth::reservation()['from_date'];

            date_default_timezone_set('Asia/Colombo');
            $reservationData['reservation_created_time'] = date('m/d/Y h:i:s a', time());

            $reservationData['reservation_status'] = 'Pending';

            $data['reservation_created_time'] = $reservationData['reservation_created_time'];
            $data['reservation_status'] = $reservationData['reservation_status'];

            if (isset($_POST['selected_seats'])) {
                $reservationData['reservation_seat'] = $_POST['selected_seats'];
            } else {
                $reservationData['reservation_seat'] = array();
            }

            $reservationData['no_of_passengers'] = Auth::reservation()['no_of_passengers'];

            if (!$seat->validate($reservationData)) {
                $data = array_merge($data, $seat->errors);
            }

            if (!isset($data['errors'])) {

                foreach ($_POST['selected_seats'] as $seat) {
                    $reservationData['reservation_seat'] = $seat;

                    $data['reservation_id'][] = $reservation->insert($reservationData);
                }
                // remove array key reservation_seats from $data
                unset($data['reservation_seats']);

                // add post['selected_seats'] to $data
                $data['selected_seats'] = $_POST['selected_seats'];

                $_SESSION['reservation'] = array_merge($_SESSION['reservation'], $data);

                $this->redirect('passenger/details');
            }
        }




        $this->view('seats.available', $data);
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

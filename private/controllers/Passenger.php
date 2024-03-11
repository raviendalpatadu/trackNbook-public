<?php

class Passenger extends Controller
{
    function index($id = '')
    {

        $this->view('passenger.register');
    }

    function details($id = '')
    {
        if (!Auth::reservation()) {
            $this->redirect('/home');
        }

        if (!Auth::is_logged_in()) {
            $this->redirect('/home');
        }

        $data = array();

        if (isset($_POST['reservation_passenger_nic']) && !empty($_POST['reservation_passenger_nic'])) {

            $reservation = new Reservations();


            if ($reservation->validatePassenger($_POST)) {

                $_SESSION['reservation']['passenger_data'] = $_POST;

                $reaservation = new Reservations();
                try {
                    $count = 0;
                    if (isset(Auth::reservation()['reservation_id']) && count(Auth::reservation()['reservation_id']) == Auth::reservation()['no_of_passengers']) {



                        foreach (Auth::reservation()['reservation_id']['from'] as $key => $value) {
                            $reservationPassengerData = array();

                            $reservationPassengerData['reservation_id'] = $value;
                            $reservationPassengerData['reservation_passenger_nic'] = $_POST['reservation_passenger_nic'][$count];
                            $reservationPassengerData['reservation_passenger_first_name'] = $_POST['reservation_passenger_first_name'][$count];
                            $reservationPassengerData['reservation_passenger_last_name'] = $_POST['reservation_passenger_last_name'][$count];
                            $reservationPassengerData['reservation_passenger_title'] = $_POST['reservation_passenger_title'][$count];
                            $reservationPassengerData['reservation_passenger_phone_number'] = $_POST['reservation_passenger_phone_number'][$count];
                            $reservationPassengerData['reservation_passenger_email'] = $_POST['reservation_passenger_email'][$count];
                            $reservationPassengerData['reservation_passenger_gender'] = $_POST['reservation_passenger_gender'][$count];

                            if (Auth::reservation()['passenger_data']['warrant_booking'] == 'on') {
                                $reservationPassengerData['reservation_type'] = "Warrant";
                            }
                            // echo "<pre>";
                            // print_r($_POST);
                            // print_r($reservationPassengerData);
                            // echo "</pre>";
                            $data = $reaservation->update($value, $reservationPassengerData, 'reservation_id');
                            $count++;
                        }

                        if (Auth::getReturn() == 'on' && isset(Auth::reservation()['reservation_id']['to'])) {
                            $count = 0;
                            foreach (Auth::reservation()['reservation_id']['to'] as $key => $value) {
                                $reservationPassengerDataTo = array();
                                $reservationPassengerDataTo['reservation_id'] = $value;
                                $reservationPassengerDataTo['reservation_passenger_nic'] = $_POST['reservation_passenger_nic'][$count];
                                $reservationPassengerDataTo['reservation_passenger_first_name'] = $_POST['reservation_passenger_first_name'][$count];
                                $reservationPassengerDataTo['reservation_passenger_last_name'] = $_POST['reservation_passenger_last_name'][$count];
                                $reservationPassengerDataTo['reservation_passenger_title'] = $_POST['reservation_passenger_title'][$count];
                                $reservationPassengerDataTo['reservation_passenger_phone_number'] = $_POST['reservation_passenger_phone_number'][$count];
                                $reservationPassengerDataTo['reservation_passenger_email'] = $_POST['reservation_passenger_email'][$count];
                                $reservationPassengerDataTo['reservation_passenger_gender'] = $_POST['reservation_passenger_gender'][$count];

                                if (Auth::reservation()['passenger_data']['warrant_booking'] == 'on') {
                                    $reservationPassengerDataTo['reservation_type'] = "Warrant";
                                }

                                $data = $reaservation->update($value, $reservationPassengerDataTo, 'reservation_id');
                                $count++;
                            }
                        }
                    } else {
                        $data['errors'][] = "Error in reservation id doesn't match with passenger count. Please try again.";
                    }
                } catch (Exception $e) {
                    die($e->getMessage());
                }

                $this->redirect('passenger/billing');
            } else {
                $data['errors'] = $reservation->__get('errors');
            }
        }

        $this->view('passenger.details', $data);
    }

    function billing($id = '')
    {
        if (!Auth::is_logged_in()) {
            $this->redirect('/home');
        }

        if (!Auth::reservation()) {
            $this->redirect('/home');
        }

        $data = array();

        // $fare =  new Fares();

        // $price_for_one = $fare->getFareData($_SESSION['reservation']['train_type'], $_SESSION['reservation']['class_type'], $_SESSION['reservation']['from_station']->station_id, $_SESSION['reservation']['to_station']->station_id); //get from db must be changed
        // $price_for_one = $price_for_one[0]->fare_price;
        if (isset($_SESSION['reservation']['passenger_data']) && !empty($_SESSION['reservation']['passenger_data'])) {
            // $station = new Stations();
            // $data['start_station'] = $station->getOneStation('station_id', $_SESSION['reservation']['from_station']->station_id);
            // $data['end_station'] = $station->getOneStation('station_id', $_SESSION['reservation']['to_station']->station_id);

            // $train = new Trains();
            // $data['train'] = $train->whereOne('train_id', $_SESSION['reservation']['train_id']);

            // $train_type = new TrainTypes();
            // $data['train_type'] = $train_type->whereOne('train_type_id', $_SESSION['reservation']['train_type']);

            // $compartment = new Compartments();
            // $data['class'] = $compartment->whereOne('compartment_id', $_SESSION['reservation']['class_id']);


            // $compartment_type = new CompartmentTypes();
            // $data['class_type'] = $compartment_type->whereOne('compartment_class_type_id', $_SESSION['reservation']['class_type']);

            // $data['no_of_passengers'] = $_SESSION['reservation']['no_of_passengers'];
            // $data['price_for_one'] = $price_for_one;
            // $data['price'] = $price_for_one * $_SESSION['reservation']['no_of_passengers'];
            // $data['date'] = $_SESSION['reservation']['from_date'];


            $this->view('passenger.billing.summary', $data);
        } else {
            $this->redirect('home');
        }
        // $data = $passenger->getPassengers();
    }


    function payment($id = '')
    {
        if (!Auth::is_logged_in()) {
            $this->redirect('/home');
        }

        if (!Auth::reservation()) {
            $this->redirect('/home');
        }

        $data = Auth::payment($_POST['payment_data']);
        echo json_encode($data);
    }

    function addReservation()
    {
        if (!Auth::is_logged_in()) {
            $this->redirect('/home');
        }

        if (!Auth::reservation()) {
            $this->redirect('/home');
        }

        $reaservation = new Reservations();
        try {
            // $data = $reaservation->addReservation($_SESSION['reservation']);
            $reservationPassengerData = array();
            $reservationPassengerData['reservation_ticket_id'] = Auth::getTicketId();


            foreach (Auth::reservation()['reservation_id']['from'] as $key => $value) {
                $reservationPassengerData['reservation_status'] = "Reserved"; // 1 for confirmed
                $reaservation->update($value, $reservationPassengerData, 'reservation_id');
            }
            $_SESSION['reservation']['from_reservation_ticket_id'] = $reservationPassengerData['reservation_ticket_id'];

            if (Auth::getReturn() == 'on' && isset(Auth::reservation()['reservation_id']['to'])) {
                $reservationPassengerDataTo = array();
                $reservationPassengerDataTo['reservation_ticket_id'] = Auth::getTicketId();

                foreach (Auth::reservation()['reservation_id']['to'] as $key => $value) {
                    $reservationPassengerDataTo['reservation_status'] = "Reserved"; // 1 for confirmed
                    $reaservation->update($value, $reservationPassengerDataTo, 'reservation_id');
                }

                $_SESSION['reservation']['to_reservation_ticket_id'] = $reservationPassengerDataTo['reservation_ticket_id'];
            }

            // add reservation data to session['reservation']
            $_SESSION['reservation']['reservation_status'] = "Reserved";

            $this->redirect('passenger/summary');
        } catch (PDOException $e) {
            echo $e->getMessage();
            $this->redirect('passenger/billing');
        }
    }

    //add passenger
    function register($id = '')
    {
        $data = array();
        $passenger = new Passengers();

        if (isset($_POST['user_title'])) {
            $data = $passenger->addPassenger();

            if (!array_key_exists('errors', $data)) {
                // print_r($data);
                $this->redirect('login');
            } else {
                $errors['user_first_name'] = (array_key_exists('user_first_name', $data['errors'])) ? $data['errors']['user_first_name'] : '';
                $errors['user_last_name'] = (array_key_exists('user_last_name', $data['errors'])) ? $data['errors']['user_last_name'] : '';
                $errors['user_phone_number'] = (array_key_exists('user_phone_number', $data['errors'])) ? $data['errors']['user_phone_number'] : '';
                $errors['login_username'] = (array_key_exists('login_username', $data['errors'])) ? $data['errors']['login_username'] : '';
                $errors['login_password'] = (array_key_exists('login_password', $data['errors'])) ? $data['errors']['login_password'] : '';
            }
        }


        $this->view('passenger.register', $data);
    }

    function summary($id = '')
    {
        if (!Auth::is_logged_in()) {
            $this->redirect('/home');
        }

        if (!Auth::reservation()) {
            $this->redirect('/home');
        }

        $this->view('passenger.summary');
    }

    // reservations
    function reservation($id = '')
    {
        $data = array();
        $reservation = new Reservations();
        $data['reservations'] = $reservation->getReservations($id);

        $this->view('passenger.reservations', $data);
    }

    // view reservation
    function viewReservation($id = '')
    {
        $data = array();
        $reservation = new Reservations();
        // $data = $reservation->getReservationPassenger("reservation_passenger_id", $id);
        $this->view('passenger.viewReservation', $data);
    }

    // recancel reservation


    // show reservation

}

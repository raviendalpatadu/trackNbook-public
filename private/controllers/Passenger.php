<?php

class Passenger extends Controller
{
    function index($id = '')
    {
         
        $this->view('passenger.register');
    }

    function details($id = '')
    {
        $data = array();
        $passenger = new Passengers();

        // if(isset($_POST['user_title'])){
        //     $data = $passenger->addPassenger();
            
        //     if(!array_key_exists('errors',$data)){
        //         $this->redirect('login');
        //     }
        //     else{
        //         $errors['user_first_name'] = (array_key_exists('user_first_name',$data['errors'])) ? $data['errors']['user_first_name'] : '';
        //         $errors['user_last_name'] = (array_key_exists('user_last_name',$data['errors'])) ? $data['errors']['user_last_name'] : '';
        //         $errors['user_phone_number'] = (array_key_exists('user_phone_number',$data['errors'])) ? $data['errors']['user_phone_number'] : '';
        //         $errors['login_username'] = (array_key_exists('login_username',$data['errors'])) ? $data['errors']['login_username'] : '';
        //         $errors['login_password'] = (array_key_exists('login_password',$data['errors'])) ? $data['errors']['login_password'] : '';
        //     }
        // }


        // $this->view('passenger.register', $data);



        if (isset($_POST['user_nic']) && !empty($_POST['user_nic'])) {
            $passenger = new Passengers();
            $data = $passenger->validatePassenger($_POST);

            if (empty($data['errors'])) {
                
                $_SESSION['reservation']['passenger_data'] = $_POST;
                
                $this->redirect('passenger/billing');
            }
        }

        $this->view('passenger.details',$data);
    }

    function billing($id = '')
    {
        $data = array();
        $price_for_one = 3000; //get from db must be changed

        if (isset($_SESSION['reservation']['passenger_data']) && !empty($_SESSION['reservation']['passenger_data'])) {
            $station = new Stations();
            $data['start_station'] = $station->getOneStation('station_id', $_SESSION['reservation']['from_station']);
            $data['end_station'] = $station->getOneStation('station_id', $_SESSION['reservation']['to_station']);

            $train = new Trains();
            $data['train'] = $train->whereOne('train_id', $_SESSION['reservation']['train_id']);
            $data['class'] = $_SESSION['reservation']['class_id'];

            $data['no_of_passengers'] = $_SESSION['reservation']['no_of_passengers'];
            $data['price_for_one'] = $price_for_one;
            $data['price'] = $price_for_one * $_SESSION['reservation']['no_of_passengers'];
            $data['date'] = $_SESSION['reservation']['from_date'];

            $this->view('passenger.billing.summary',$data);
        }else{
            unset($_SESSION['reservation']);
            $this->view('home');
        }
        // $data = $passenger->getPassengers();
    }


    function payment($id = '')
    {
        $data = array();
        $passenger = new Passengers();


        if(isset($_POST['card_no'])){
            $data = $passenger->makePayment();
            
            
            if(!array_key_exists('errors',$data)){
                $this->redirect('passenger/addReservation');
            }
            // else{
            //     // $errors['user_first_name'] = (array_key_exists('user_first_name',$data['errors'])) ? $data['errors']['user_first_name'] : '';
            //     // $errors['user_last_name'] = (array_key_exists('user_last_name',$data['errors'])) ? $data['errors']['user_last_name'] : '';
            //     // $errors['user_phone_number'] = (array_key_exists('user_phone_number',$data['errors'])) ? $data['errors']['user_phone_number'] : '';
            //     // $errors['login_username'] = (array_key_exists('login_username',$data['errors'])) ? $data['errors']['login_username'] : '';
            //     // $errors['login_password'] = (array_key_exists('login_password',$data['errors'])) ? $data['errors']['login_password'] : '';

            // }
        }
        $this->view('passenger.payment', $data);
    }

    function addReservation() {

        $reaservation = new Reservations();
        try{
            $data = $reaservation->addReservation($_SESSION['reservation']);
        }catch(PDOException $e){
            echo $e->getMessage();
        }

        if ($data) {
            $this->redirect('passenger/summary');
        } else {
            $this->redirect('passenger/billing');
        }  
    }

    //add passenger
    function register($id = '') {
        $data = array();
        $passenger = new Passengers();

        if(isset($_POST['user_title'])){
            $data = $passenger->addPassenger();
            
            if(!array_key_exists('errors',$data)){
                $this->redirect('login');
            }
            else{
                $errors['user_first_name'] = (array_key_exists('user_first_name',$data['errors'])) ? $data['errors']['user_first_name'] : '';
                $errors['user_last_name'] = (array_key_exists('user_last_name',$data['errors'])) ? $data['errors']['user_last_name'] : '';
                $errors['user_phone_number'] = (array_key_exists('user_phone_number',$data['errors'])) ? $data['errors']['user_phone_number'] : '';
                $errors['login_username'] = (array_key_exists('login_username',$data['errors'])) ? $data['errors']['login_username'] : '';
                $errors['login_password'] = (array_key_exists('login_password',$data['errors'])) ? $data['errors']['login_password'] : '';
            }
        }


        $this->view('passenger.register', $data);
    }

    function summary($id = '') {
        $data = array();
        $train = new Trains();
        $resultTrain = $train->getTrainReservation($_SESSION['reservation']['class_id'] , $_SESSION['reservation']['train_id']);
        $data['train'] = $resultTrain[0];
        // if(isset($_POST['user_title'])){
        //     $data = $passenger->addPassenger();
            
        //     if(!array_key_exists('errors',$data)){
        //         $this->redirect('login');
        //     }
        //     else{
        //         $errors['user_first_name'] = (array_key_exists('user_first_name',$data['errors'])) ? $data['errors']['user_first_name'] : '';
        //         $errors['user_last_name'] = (array_key_exists('user_last_name',$data['errors'])) ? $data['errors']['user_last_name'] : '';
        //         $errors['user_phone_number'] = (array_key_exists('user_phone_number',$data['errors'])) ? $data['errors']['user_phone_number'] : '';
        //         $errors['login_username'] = (array_key_exists('login_username',$data['errors'])) ? $data['errors']['login_username'] : '';
        //         $errors['login_password'] = (array_key_exists('login_password',$data['errors'])) ? $data['errors']['login_password'] : '';
        //     }
        // }

        if (isset($_SESSION['reservation'])) {
            $this->view('passenger.summary', $data);
        } else{
            $this->redirect('home');
        }
    }

    // recancel reservation

    // show reservation

    //make inquiries

    function cancel($id = '')
    {
         
        $this->view('passenger.cancel.reservation');
    }


}
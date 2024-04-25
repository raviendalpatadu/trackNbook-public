<?php

/**
 * TicketChecker controller
 */

class TicketChecker extends Controller
{

    function reservationList($id = '')
    {
        $resevation = new Reservations();

        $data = array();
        $seatData = array();




        $seatData['from']['reservation_train_id'] = 2;
        $seatData['from']['reservation_compartment_id'] = 22;
        $seatData['from']['reservation_date'] = '2024-05-11';//date('Y-m-d');
        $seatData['from']['reservation_start_station'] = 1;
        $seatData['from']['reservation_end_station'] = 14;

        $train = new Trains();
        $data['from_train'] = $train->whereOne('train_id', 1);

        $seat = new Seats();
        $data['from_reservation_seats'] = $seat->getReservedSeats($seatData['from']);

        $compartment = new Compartments();
        $data['from_compartment'] = $compartment->whereOne('compartment_id', 22);

        $compartment_types = new CompartmentTypes();
        $data['from_compartment_type'] = $compartment_types->whereOne('compartment_class_type_id', $data['from_compartment']->compartment_class_type);
        
        $this->view('reservation.ticketchecker.new', $data);
    }

    function option($id = '')
    {
        if(!Auth::is_logged_in() || !Auth::isUserType('ticket_checker')){
            $this->redirect('login');
        }if{(Auth::is_logged_in() && Auth::isUserType('ticket_checker')) and is set session ticket checker {
redirect option; 
        }

        

        }if server request method - post{
            post (trainid);
            create session ticket checker;
        }


        // if(!Auth::isPinChanged(Auth::getuser_data(), 'ticket_checker')){
        //     // get user id
        //     $user_id = Auth::getUser_id();
        //     $this->redirect('login/changepin/'.$user_id);
        // }

    
        $this->view('option.ticketchecker');
    }

    function index($id = '')
    {
        // $resevation = new Reservations();

        // $train = new Trains();

        // $data = array();

        // $data['trains'] = $train->findAll();
        // $data['reservations'] = $resevation->getReservation();
        // if (isset($_POST['submit']) && !empty($_POST['reservation_date'])) {
        //     $data['reservations'] = $resevation->getReservations('reservation_date', $_POST['reservation_date']);
        // }
        // if (isset($_POST['submit']) && !empty($_POST['reservation_passenger_nic'])) {
        //     $data['reservations'] = $resevation->getReservations('reservation_passenger_nic', $_POST['reservation_passenger_nic']);
        // }
        // if (isset($_POST['submit']) && !empty($_POST['reservation_train_id'])) {
        //     $data['reservations'] = $resevation->getReservations('reservation_train_id', $_POST['reservation_train_id']);
        // }


        $this->view('dashboard.ticketchecker');
    }

    function summary($id = ''){

        if(!Auth::is_logged_in() || !Auth::isUserType('ticket_checker')){
            $this->redirect('login');
        }
        
        $resevation = new Reservations();
        $data = array();
        $data['reservations'] = $resevation->getReservationDataTicket($id);

        $this->view('summary.ticketchecker', $data);
   
    }

    function QR($id = '')
    {
         
        $resevation = new Reservations();
        $data = array();
        $data['reservations'] = $resevation->getReservationDataTicket($id);

        $this->view('QRSearch.ticketchecker');
    }

    function ScanDetails($id = '')
    {

        $this->view('ScanDetails.ticketchecker');
    }

}

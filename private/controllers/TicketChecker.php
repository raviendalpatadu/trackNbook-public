<?php

/**
 * TicketChecker controller
 */

class TicketChecker extends Controller
{

    function reservationList($id = '')
    {
        $resevation = new Reservations();

        $train = new Trains();

        $data = array();

        $data['trains'] = $train->findAll();
        $data['reservations'] = $resevation->getReservation();
        if (isset($_POST['submit']) && !empty($_POST['reservation_date'])) {
            $data['reservations'] = $resevation->getReservations('reservation_date', $_POST['reservation_date']);
        }
        if (isset($_POST['submit']) && !empty($_POST['reservation_passenger_nic'])) {
            $data['reservations'] = $resevation->getReservations('reservation_passenger_nic', $_POST['reservation_passenger_nic']);
        }
        if (isset($_POST['submit']) && !empty($_POST['reservation_train_id'])) {
            $data['reservations'] = $resevation->getReservations('reservation_train_id', $_POST['reservation_train_id']);
        }
        
        $this->view('reservation.ticketchecker', $data);
    }

    function option($id = '')
    {
        if(!Auth::is_logged_in() || !Auth::isUserType('ticket_checker')){
            $this->redirect('login');
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

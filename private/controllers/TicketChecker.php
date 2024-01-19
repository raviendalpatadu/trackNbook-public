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
         
        $this->view('option.ticketchecker');
    }

    function index($id = '')
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


        $this->view('dashboard.ticketchecker', $data);
    }

    function summary($id = '')
    {

        $this->view('summary.ticketchecker');
    }

    function QR($id = '')
    {

        $this->view('QRSearch.ticketchecker');
    }

    function ScanDetails($id = '')
    {

        $this->view('ScanDetails.ticketchecker');
    }

}

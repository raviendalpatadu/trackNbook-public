<?php

/**
 * staffticketing controller
 */

class StaffTicketing extends Controller
{
    function index($id = '')
    {

        $this->view('staff_ticketing.dashboard');
    }

    function pay($id = '')
    {

        $this->view('ticket.staffticketing');
    }

    function summary($id = '')
    {
        $resevation = new Reservations();
        $data = array();
        $data['reservations'] = $resevation->whereOne("reservation_id", $id);

        $train = new Trains();
        $data['train'] = $train->getTrain($data['reservations']->reservation_train_id);
        $this->view('summary.staffticketing', $data);
    }

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



        $this->view('reservation.staffticketing', $data);
    }

    function warrant($id = '')
    {
        $warrent_resevation = new WarrantsReservations();



        $train = new Trains();

        $data = array();

        $data['trains'] = $train->findAll();
        $data['reservations'] = $warrent_resevation->getjoinReservation();


        if (isset($_POST['submit']) && !empty($_POST['reservation_date'])) {
            $data['reservations'] = $warrent_resevation->getReservations('reservation_date', $_POST['reservation_date']);
        }
        if (isset($_POST['submit']) && !empty($_POST['reservation_passenger_nic'])) {
            $data['reservations'] = $warrent_resevation->getReservations('reservation_passenger_nic', $_POST['reservation_passenger_nic']);
        }
        if (isset($_POST['submit']) && !empty($_POST['reservation_train_id'])) {
            $data['reservations'] = $warrent_resevation->getReservations('reservation_train_id', $_POST['reservation_train_id']);
        }


        $this->view('warrants.staffticketing',$data);
    }

    function displayWarrent($id = '')
    {
        $warrant_resevation = new WarrantsReservations();
        $data = array();
        $result = $warrant_resevation->getReservations("warrant_id", $id, "tbl_warrant_reservation");
        $data['reservations'] = $result[0];
        $train = new Trains();
        $data['train'] = $train->getTrain($data['reservations']->reservation_train_id);

        $this->view('display.warrant.staffticketing', $data);
    }

    function seatMap($id = '')
    {

        $this->view('seatmap.staffticketing');
    }

    function cancel($id = '')
    {
        $resevation = new Reservations();
        $data = array();
        $data['reservations'] = $resevation->whereOne("reservation_id", $id);


        if (isset($_POST['reservation_passenger_nic']) && !empty($_POST['reservation_passenger_nic']) && isset($_POST['reservation_id']) && !empty($_POST['reservation_id'])) {
            $resevation = new Reservations();

            $result = $resevation->cancelReservation($_POST['reservation_id'], $_POST['reservation_passenger_nic']);
            if ($result) {
                $this->redirect('staffticketing/reservationList');
            } 
        }else{
            $this->view('cancellation.staffticketing', $data);
        }


    }

    function refund($id = '')
    {

        $this->view('refund.staffticketing');
    }

    function home($id = '')
    {

        $this->view('home.staffticketing');
    }

    function trains($id = '')
    {

        $this->view('trains.staffticketing');
    }

    function rejectWarrent($id = ''){
        $warrant_resevation = new WarrantsReservations();
        // echo $id;
        try{
            $warrant_resevation->update($id,array(
                'warrant_status'=>'rejected'
            ),"warrant_id");
        }catch(PDOException $e){
            echo $e->getMessage();
        }

        
        $this->redirect('staffticketing/Warrant');
    }


}

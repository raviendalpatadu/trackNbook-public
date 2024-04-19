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

    // function summary($id = '')
    // {
    //     $resevation = new Reservations();
    //     $data = array();
    //     $data['reservations'] = $resevation->whereOne("reservation_id", $id);

    //     $train = new Trains();
    //     $data['train'] = $train->getTrain($data['reservations']->reservation_train_id);

    //     $this->view('summary.staffticketing', $data);
    // }

    function summary($id = '')
    {
        $resevation = new Reservations();
        $train = new Trains();
        $fare = new Fares();
        $compartment = new Compartments();

        $data = array();

        $data['reservations'] = $resevation->getReservationDataTicket($id);

        $train_type = $train->whereOne('train_id', $data['reservations'][0]->reservation_train_id);


        $data['train'] = $train->getTrain($data['reservations'][0]->reservation_train_id);

        $compartment_type = $compartment->whereOne('compartment_id', $data['reservations'][0]->reservation_compartment_id);


        $data['compartment'] = $compartment_type->compartment_class_type;

        $station = new Stations();
        $start_station = $station->whereOne('station_name', $data['reservations'][0]->reservation_start_station);
        $end_station = $station->whereOne('station_name', $data['reservations'][0]->reservation_end_station);



        $data['fares'] = $fare->getFareData($train_type->train_type, $compartment_type->compartment_class_type, $start_station->station_id, $end_station->station_id);



        $this->view('summary.staffticketing', $data);
    }

    function reservationList($id = '')
    {
        $resevation = new Reservations();


        $train = new Trains();

        $data = array();


        $data['reservations'] = $resevation->getReservation();

        if (isset($_POST['submit']) && !empty($_POST['reservation_date'])) {
            $data['reservations'] = $resevation->where('reservation_date', $_POST['reservation_date']);
        }
        if (isset($_POST['submit']) && !empty($_POST['reservation_passenger_nic'])) {
            $data['reservations'] = $resevation->where('reservation_passenger_nic', $_POST['reservation_passenger_nic']);
        }
        if (isset($_POST['submit']) && !empty($_POST['reservation_ticket_id'])) {
            $data['reservations'] = $resevation->where('reservation_ticket_id', $_POST['reservation_ticket_id']);
        }




        $this->view('reservation.staffticketing', $data);
    }

    function warrant($id = '')
    {
        $warrent_resevation = new WarrantsReservations();

        $train = new Trains();

        $data = array();

        $data['trains'] = $train->findAllTrains();
        $data['reservations'] = $warrent_resevation->getjoinReservation();


        if (isset($_POST['submit']) && !empty($_POST['reservation_date'])) {
            $data['reservations'] = $warrent_resevation->getjoinReservation('r.reservation_date', $_POST['reservation_date']);
        }
        if (isset($_POST['submit']) && !empty($_POST['reservation_passenger_nic'])) {
            $data['reservations'] = $warrent_resevation->getjoinReservation('r.reservation_passenger_nic', $_POST['reservation_passenger_nic']);
        }
        if (isset($_POST['submit']) && !empty($_POST['reservation_ticket_id'])) {
            $data['reservations'] = $warrent_resevation->getjoinReservation('r.reservation_ticket_id', $_POST['reservation_ticket_id']);
        }


        $this->view('warrants.staffticketing', $data);
    }

    function displayWarrent($warrant_id, $tikcet_id)
    {
        $warrant_resevation = new WarrantsReservations();
        $data = array();

        $data['warrant_reservations'] = $warrant_resevation->getReservations($warrant_id);


        $reservation  = new Reservations();
        $data['reservations'] = $reservation->getReservationDataTicket($tikcet_id);


        $train = new Trains();
        $data['train'] = $train->getTrain($data['reservations'][0]->reservation_train_id)[0];

        $warrant_image = new WarrantImages();
        $data['warrant_img'] = $warrant_image->whereOne('warrant_image_id', $data['warrant_reservations'][0]->warrant_image_id);

        $this->view('display.warrant.staffticketing', $data);
    }

    // call getWarrantImage function from controller reffer user controller getUserImage function

    // public function getWarrantImage($folder, $file)
    // {

    //     $warrant_resevation = new WarrantsReservations();
    //     $data = array();

    //     $this->getPrivateImage($folder, $file);
    // }

    function seatMap($id = '')
    {

        $this->view('seatmap.staffticketing');
    }

    function cancel($id = '')
    {
        $reservation = new Reservations();
        $train = new Trains();
        $fare = new Fares();
        $compartment = new Compartments();

        $data = array();


        if (isset($_POST['reservation_ticket_id']) && !empty($_POST['reservation_ticket_id'])) {

            $data['reservations'] = $reservation->getReservationDataTicket($_POST['reservation_ticket_id']);

            if (isset($data['reservations']) && !empty($data['reservations']) && $data['reservations'] != 0) {
                $train_type = $train->whereOne('train_id', $data['reservations'][0]->reservation_train_id);
                $data['train'] = $train->getTrain($data['reservations'][0]->reservation_train_id);
                $compartment_type = $compartment->whereOne('compartment_id', $data['reservations'][0]->reservation_compartment_id);
                $data['compartment'] = $compartment_type->compartment_class_type;

                $station = new Stations();
                $start_station = $station->whereOne('station_name', $data['reservations'][0]->reservation_start_station);
                $end_station = $station->whereOne('station_name', $data['reservations'][0]->reservation_end_station);
                $data['fares'] = $fare->getFareData($train_type->train_type, $compartment_type->compartment_class_type, $start_station->station_id, $end_station->station_id);

                $data['refund'] = $reservation->getRefund($_POST['reservation_ticket_id'],  $data['fares'][0]->fare_price);
            }
        }


        // reservation_model eken getRefundDetails function eka call karanna ona
        // $reservation->callProcedure('cancel_reservation', ['20240408115213-4158']);

        // if (isset($_POST['reservation_passenger_nic']) && !empty($_POST['reservation_passenger_nic']) && isset($_POST['reservation_id']) && !empty($_POST['reservation_id'])) {
        //     $reservation = new Reservations();

        //     $result = $reservation->cancelReservation($_POST['reservation_id'], $_POST['reservation_passenger_nic']);
        //     if ($result) {
        //         $this->redirect('staffticketing/reservationList');
        //     }
        // } else {
        //     $this->view('cancellation.staffticketing', $data);
        // }
        $this->view('cancel.staffticketing', $data);
    }


    // function refund($id = '')
    // {


    //     $this->view('make_refund.staffticketing');
    // }

    // function refundList($id = '')
    // {

    //     $this->view('refund_list.staffticketing');
    // }

    // function refundDetails($id = '')
    // {

    //     $this->view('refund_details.staffticketing');
    // }

    function home($id = '')
    {
        $station = new Stations();
        $data = array();
        $data['stations'] = $station->getStations();

        if (isset($_SESSION['reservation'])) {
            unset($_SESSION['reservation']);
        }

        if (isset($_SESSION['errors'])) {
            $data['errors'] = $_SESSION['errors'];
            unset($_SESSION['errors']);
        }

        $this->view('home.staffticketing', $data);
    }

    function trains($id = '')
    {
        $station = new Stations();
        $data = array();
        $data['trains_avilable'] = array();

        if (isset($_POST['to_station']) && isset($_POST['from_station']) && isset($_POST['from_date'])) {

            $train = new Trains();
            $data['trains_available'] = $train->search();


            if (array_key_exists('errors', $data['trains_available'])) {
                $_SESSION['errors'] = $data['trains_available'];
                // $this->redirect('home');
            } else {
                $this->view('trains.staffticketing', $data);
            }
        }
        // $this->view('trains.staffticketing');
    }
    function verifiedWarrent($id = '')
    {
        $warrant_resevation = new WarrantsReservations();
        // echo $id;
        try {
            $warrant_data = $warrant_resevation->getReservations($id);

            echo "<pre>";
            print_r($warrant_data);
            echo "</pre>";

            $warrant_resevation->update($id, array(
                'warrant_status' => 'verified'
            ), "warrant_id");

            $new_ticket_id = Auth::getTicketId();

            $reservation = new Reservations();
            $reservation->update($warrant_data[0]->reservation_ticket_id, array(
                'reservation_ticket_id' => $new_ticket_id,
                'reservation_status' => 'Reserved'
            ), "reservation_ticket_id");

            // send mail
            foreach ($warrant_data as $warrant) {
                try {
                    $name = ucfirst($warrant->reservation_passenger_first_name);
                    $subject = "Warrant Reservation has been Approved";
                    $message = "Your warrant has been approved. Your new ticket id is " . $new_ticket_id;
                    $body = Auth::getEmailBody($name, $message);
                    $to = $warrant->reservation_passenger_email;

                    // echo $body;
                    if (!$this->sendMail($to, $name, $subject, $body)) {
                        die('failed to send mail');
                    }
                } catch (Exception $e) {
                    die($e->getMessage());
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        $this->redirect('staffticketing/Warrant');
    }

    function pendingWarrent($id = '')
    {
        $warrant_resevation = new WarrantsReservations();
        // echo $id;
        try {
            $warrant_resevation->update($id, array(
                'warrant_status' => 'Approval Pending'
            ), "warrant_id");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        $this->redirect('staffticketing/Warrant');
    }

    function rejectWarrent($id)
    {
        // $warrant_resevation = new WarrantsReservations();
        // // echo $id;
        // try {
        //     $warrant_resevation->update($id, array(
        //         'warrant_status' => 'Rejected'
        //     ), "warrant_id");
        // } catch (PDOException $e) {
        //     die($e->getMessage());
        // }

        $reject_warrant = new WarrantsReservationsRejected();

        try {

           

            if (isset($_POST['warrantRejectReason']) && !empty($_POST['warrantRejectReason'])) {
                $rejectionReason = $_POST['warrantRejectReason'];

                // send mail

                $warrant_resevation = new Reservations();
                $warrant_data = $warrant_resevation->where('reservation_ticket_id', $id);

                echo "<pre>";
                print_r($warrant_data);
                echo "</pre>";

                foreach ($warrant_data as $warrant) {
                    try {
                        $name = ucfirst($warrant->reservation_passenger_first_name);
                        $subject = "Warrant Reservation has been Rejected";
                        $message = "Your warrant has been rejected. <br> Reason: " . $rejectionReason;
                        $body = Auth::getEmailBody($name, $message);
                        $to = $warrant->reservation_passenger_email;

                        // echo $body;
                        if (!$this->sendMail($to, $name, $subject, $body)) {
                            die('failed to send mail');
                        }
                    } catch (Exception $e) {
                        die($e->getMessage());
                    }
                }
            }

            $reject_warrant->callProcedure('reject_warrant_reservation', array($id));
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }




        $this->redirect('staffticketing/warrant');
    }

    function refectReason($id = '')
    {

        $this->view('refect_reason.staffticketing');
    }

    function passengerdetails($id = '')
    {

        $this->view('details.staffticketing');
    }

    function payment($id = '')
    {

        $this->view('staffticketing.payment');
    }


    function StaffLogin($id = '')
    {
        $errors = array();


        $user = new Users();
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $data = $user->login();

            if (!array_key_exists('error', $data)) {

                Auth::authenticate($data[0]);

                $user_id = $data[0]->user_id;

                $user_type = Auth::getUser_Type($user_id);
                // redirect to dashboard admin
                if (strtolower($user_type) == "admin") {
                    $this->redirect('dashboard/admin');
                }
                // redirect to dashboard passenger
                elseif (strtolower($user_type) == "passenger") {
                    $this->redirect('home');
                }
                //rederect to dashboard staff general
                elseif (strtolower($user_type) == "staff_general") {
                    $this->redirect('dashboard/staff_general');
                }
                //rederect to dashboard staff ticketing
                elseif (strtolower($user_type) == "staff_ticketing") {
                    $this->redirect('dashboard/staff_ticketing');
                }
                //rederect to dashboard train driver
                elseif (strtolower($user_type) == "train_driver") {
                    $this->redirect('dashboard/train_driver');
                }
                //rederect to dashboard station master
                elseif (strtolower($user_type) == "station_master") {
                    $this->redirect('dashboard/station_master');
                } elseif (strtolower($user_type) == "ticket_checker") {
                    $this->redirect('dashboard/ticket_checker');
                }
            } else {
                $errors['username'] = (array_key_exists('invalid_uname', $data['error'])) ? $data['error']['invalid_uname'] : '';
                $errors['password'] = (array_key_exists('invalid_password', $data['error'])) ? $data['error']['invalid_password'] : '';
            }
        }


        //$errors['email'] = 'invalid Username or Password';
        //}

        $this->view(
            'staffticketing.Login',
            array(
                'errors' => $errors,
            )
        );
    }
}

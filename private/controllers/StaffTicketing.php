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
        $this->view('summary.staffticketing');
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


        $this->view('warrants.staffticketing', $data);
    }

    function displayWarrent($id = '')
    {
        $warrant_resevation = new WarrantsReservations();
        $data = array();
        $result = $warrant_resevation->getReservations($id);
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
        } else {
            $this->view('cancellation.staffticketing', $data);
        }
    }


    function refund($id = '')
    {

        $this->view('make_refund.staffticketing');
    }

    function refundList($id = '')
    {

        $this->view('refund_list.staffticketing');
    }

    function refundDetails($id = '')
    {

        $this->view('refund_details.staffticketing');
    }

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
            $warrant_resevation->update($id, array(
                'warrant_status' => 'verified'
            ), "warrant_id");
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
                'warrant_status' => 'pending'
            ), "warrant_id");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        $this->redirect('staffticketing/Warrant');
    }

    function rejectWarrent($id = '')
    {
        $warrant_resevation = new WarrantsReservations();
        // echo $id;
        try {
            $warrant_resevation->update($id, array(
                'warrant_status' => 'Rejected'
            ), "warrant_id");
        } catch (PDOException $e) {
            die($e->getMessage());
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

<?php
class Ajax extends Controller
{



    public function getSession($name)
    {
        if (isset($_SESSION[$name])) {
            echo json_encode($_SESSION[$name]);
        } else {
            echo json_encode(false);
        }
    }

    public function getReservationData($id, $type = '')

    {
        $reservation = new Reservations();
        echo json_encode($reservation->getReservationDataTicket($id, $type));
    }

    public function cancelReservation($id)
    {
        // notify the waiting list
        $waitingList = new WaitingLists();
        $waiting_passenger_list = $waitingList->notifyWaitingList($id);

        
        // echo json_encode($waiting_passenger_list);
        foreach ($waiting_passenger_list as $waiting_passenger) {
            // send email to the waiting list

            $user = new Users();
            try{
                $user_data = $user->whereOne('user_id',$waiting_passenger->waiting_list_passenger_id);
                
                $email = $user_data->user_email;
                $subject = "Train Reservation Notification";
                $message = "<h3>Some seats are available on the train.</h3>
                <h4>$waiting_passenger->train_name</h4>
                <div>
                    <p style='font-size: 14px; font-weight: 500'>From: $waiting_passenger->start_station_name</p>
                    <p style='font-size: 14px; font-weight: 500'>To: $waiting_passenger->end_station_name</p>
                    <p style='font-size: 14px; font-weight: 500'>Departure Time: $waiting_passenger->estimated_start_time</p>
                    <p style='font-size: 14px; font-weight: 500'>Arrival Time: $waiting_passenger->estimated_end_time</p>
                </div>
                Please login to your account to make a reservation.";
    
                $message = Auth::getEmailBody($user_data->user_first_name, $message);
            }
            catch(Exception $e){
                die($e->getMessage());
            }

            $this->sendMail($email, $user_data->user_first_name, $subject, $message);
        }

        $reservation = new Reservations();
        $result = $reservation->callProcedure('cancel_reservation', array($id));
        echo json_encode($result);
    }

    public function getStation()
    {
        $station = new stations();
        echo json_encode($station->findAll());
    }

    public function getAllReservations()
    {
        $reservation = new Reservations();
        echo json_encode($reservation->findAll());
    }
}

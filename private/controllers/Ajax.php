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

    public function getUsers()
    {
        $user = new Users();
        $result = $user->findAll();

       

        echo json_encode($result); // Wrap the output array inside a "data" key
    }

    public function getTrainList()
    {
        $train = new Trains();
        $data = array();
        
        $data = $train->findAllTrains();// Wrap the output array inside a "data" key
        
        echo json_encode($data);
    }

}

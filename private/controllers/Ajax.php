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

    public function getReservationData($id)
    {
        $reservation = new Reservations();
        echo json_encode($reservation->getReservationDataTicket($id));
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
}

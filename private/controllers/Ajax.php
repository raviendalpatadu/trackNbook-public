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

    public function getAllReservations()
    {
        $reservation = new Reservations();
        echo json_encode($reservation->findAll());
    }
}

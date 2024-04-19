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

    public function getTrains()
    {
        $train = new Trains();
        $data = array();
        $data = $train->findAllTrains();

        echo json_encode($data); 
    }

    public function updateLocation()
    {
        $train = new Trains();
        $data = array();
        $data['train'] = $train->whereOne('train_id', $_POST['train_id']);
        $train_stop_station = new TrainStopStations();
        $data['train_stop_stations'] = $train_stop_station->getTrainStopStationNames($_POST['train_id']);
        echo json_encode($data);
    }
}

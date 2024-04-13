<?php

use Sabberworm\CSS\Value\Value;

class Trains extends Model
{
    protected $table = 'tbl_train';

    public function __construct()
    {
        parent::__construct();
    }

    public function trainsAvailableValidate($values = array())
    {
        if (empty($values['from_station']) || $values['from_station'] == 0) {
            $this->errors['errors']['from_station'] = 'Station is required';
        }

        if (empty($values['to_station']) || $values['to_station'] == 0) {
            $this->errors['errors']['to_station'] = 'Station is required';
        }

        if (empty($values['from_date'])) {
            $this->errors['errors']['from_date'] = 'Date is required';
        }

        if (empty($values['from_compartment_and_train']) || !isset($values['from_compartment_and_train'])) {
            $this->errors['errors']['from_compartment_and_train'] = 'From compartment should be selected';
        }

        if (empty($values['no_of_passengers'])) {
            $this->errors['errors']['no_of_passengers'] = 'Passenger count is required';
        }

        if (isset($values['return']) && $values['return'] == 'on') {
            if (!isset($values['to_date'])) {
                $this->errors['errors']['to_date'] = 'To date is required';
            }

            if (empty($values['to_date'])) {
                $this->errors['errors']['to_date'] = 'To date is required';
            }

            if (!isset($values['to_compartment_and_train'])) {
                $this->errors['errors']['to_compartment_and_train'] = 'To compartment should be selected';
            }
        }

        if (count($this->errors) > 0) {
            return false;
        }
        return true;
    }



    public function findAllTrains()
    {


        $data = array();


        try {
            $con = $this->connect();
            $con->beginTransaction();

            //insert query to search train must come form route
            $query = "SELECT\n"

                . "tbl_train.*,\n"

                . "start.station_name AS start_station,\n"

                . "end.station_name AS end_station\n"



                . "\n"

                . "FROM\n"

                . "	tbl_train\n"

                . "JOIN\n"

                . "	tbl_station AS start ON tbl_train.train_start_station = start.station_id\n"

                . " JOIN\n"

                . " 	tbl_station AS end ON tbl_train.train_end_station = end.station_id ";
            $stm = $con->prepare($query);

            $stm->execute();

            $data = $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        if ($data > 0) {
            return $data;
        }
    }

    public function validate($values = array())
    {


        if (empty($values['to_station']) || $values['to_station'] == 0) {
            $this->errors['errors']['to_station'] = 'Station is required';
        }

        //check if from_station is exists in post
        if (empty($values['from_station']) || $values['from_station'] == 0) {
            $this->errors['errors']['from_station'] = 'Staion is required';
        }

        //check if from staion = to_station
        if (!(array_key_exists('errors', $this->errors)) && $values['from_station'] == $values['to_station']) {
            $this->errors['errors']['from_station'] = 'From and To stations are same';
            $this->errors['errors']['to_station'] = 'From and To stations are same';
        }

        //check if from date is exists in post
        if (empty($values['from_date'])) {
            $this->errors['errors']['from_date'] = 'date is required';
        }

        if (isset($values['return'])) {
            //check if to date is exists in post
            if (empty($values['to_date'])) {
                $this->errors['errors']['to_date'] = 'Date is required';
            }
        }

        //check if from no of passengers is exists in post
        if (empty($values['no_of_passengers'])) {
            $this->errors['errors']['no_of_passengers'] = 'Passenger count is required';
        }

        if (count($this->errors) > 0) {
            return false;
        }
        return true;
    }
    public function search($values = array())
    {
        $errors = array();


        $data = array();
        //   //check if to_station is exists in post

        if (!array_key_exists('errors', $errors)) {

            try {
                //insert query to search train must come form route
                $query = "WITH
                            StartingTrains AS (
                                SELECT
                                    *
                                FROM
                                    tbl_train_stop_station
                                WHERE
                                    station_id = :from_station
                            ),
                            res AS (
                            SELECT
                            r.reservation_id,
                            r.reservation_ticket_id,
                            r.reservation_train_id,
                            r.reservation_compartment_id,
                            r.reservation_date,
                            s.station_name AS reservation_start_station,
                            reservation_start_st.stop_no AS reservation_start_stop_no,
                            e.station_name AS reservation_end_station,
                            reservation_end_st.stop_no AS reservation_end_stop_no
                            FROM
                            tbl_reservation r
                            JOIN tbl_train_stop_station reservation_start_st ON r.reservation_start_station = reservation_start_st.station_id AND r.reservation_train_id = reservation_start_st.train_id
                            JOIN tbl_train_stop_station reservation_end_st ON r.reservation_end_station = reservation_end_st.station_id AND r.reservation_train_id = reservation_end_st.train_id
                            JOIN tbl_station s ON reservation_start_st.station_id = s.station_id
                            JOIN tbl_station e ON reservation_end_st.station_id = e.station_id
                            GROUP BY
                            r.reservation_id
                        ),
                        CountReservations AS (
                            SELECT
                            ac.*,
                            COUNT(r.reservation_compartment_id) AS no_of_reservations
                            FROM
                            tbl_compartment ac
                            LEFT JOIN res r ON ac.compartment_id = r.reservation_compartment_id
                            AND r.reservation_date = :from_date
                            AND (
                                (
                                (
                                    (
                                        SELECT
                                            stop_no
                                        FROM
                                            tbl_train_stop_station
                                        WHERE
                                            train_id = r.reservation_train_id
                                            AND station_id = :from_station
                                    )  <= r.reservation_start_stop_no
                                    AND r.reservation_start_stop_no < 
                                    (
                                        SELECT
                                            stop_no
                                        FROM
                                            tbl_train_stop_station
                                        WHERE
                                            train_id = r.reservation_train_id
                                            AND station_id = :to_station
                                    ) 
                                )
                                OR (
                                    (
                                        SELECT
                                            stop_no
                                        FROM
                                            tbl_train_stop_station
                                        WHERE
                                            train_id = r.reservation_train_id
                                            AND station_id = :from_station
                                    )  < r.reservation_end_stop_no
                                    AND r.reservation_end_stop_no <= 
                                    (
                                        SELECT
                                            stop_no
                                        FROM
                                            tbl_train_stop_station
                                        WHERE
                                            train_id = r.reservation_train_id
                                            AND station_id = :to_station
                                    ) 
                                )
                                )
                                OR (
                                (
                                        SELECT
                                            stop_no
                                        FROM
                                            tbl_train_stop_station
                                        WHERE
                                            train_id = r.reservation_train_id
                                            AND station_id = :from_station
                                    )  >= r.reservation_start_stop_no
                                AND r.reservation_end_stop_no >= 
                                (
                                        SELECT
                                            stop_no
                                        FROM
                                            tbl_train_stop_station
                                        WHERE
                                            train_id = r.reservation_train_id
                                            AND station_id = :to_station
                                    ) 
                                )
                            )
                            GROUP BY
                            ac.compartment_id,
                            ac.compartment_class_type
                        )
                        SELECT
                            DISTINCT train.train_id,
                            train.train_name,
                            train_type.train_type,
                            train.train_start_time,
                            train.train_end_time,
                            START.station_name AS train_start_station,
                            END.station_name AS train_end_station,
                            reservation.*,
                            compartment_type.compartment_class_type,
                            fare.fare_price
                        FROM
                            StartingTrains ST
                            JOIN tbl_train_stop_station TS1 ON ST.train_id = TS1.train_id
                            JOIN tbl_train_stop_station TS2 ON TS1.train_id = TS2.train_id
                            JOIN tbl_train train ON ST.train_id = train.train_id
                            JOIN tbl_train_type train_type ON train_type.train_type_id = train.train_type
                            JOIN tbl_station AS START ON train.train_start_station = START.station_id
                            JOIN tbl_station AS END ON train.train_end_station = END.station_id
                            JOIN tbl_compartment AS compartment ON compartment.compartment_train_id = train.train_id
                            JOIN tbl_compartment_class_type AS compartment_type ON compartment_type.compartment_class_type_id = compartment.compartment_class_type
                            JOIN CountReservations AS reservation ON reservation.compartment_id = compartment.compartment_id
                            JOIN tbl_fare AS fare ON fare.fare_train_type_id = train.train_type 

                        WHERE
                            TS1.station_id = :from_station
                            AND TS2.station_id = :to_station
                            
                            AND TS1.stop_no < TS2.stop_no
                            AND reservation.compartment_total_seats > reservation.no_of_reservations
                                                AND (compartment.compartment_total_seats - reservation.no_of_reservations) >= :no_of_passengers
                            
                            AND reservation.compartment_total_seats > reservation.no_of_reservations
                            
                            AND fare.fare_compartment_id = compartment.compartment_class_type
                            AND fare.fare_route_id = train.train_route
                            AND fare.fare_start_station = :from_station
                            AND fare.fare_end_station = :to_station
                            
                            ORDER BY train.train_start_time, compartment_type.compartment_class_type_id ASC";


                $data = $this->query($query, array(
                    'from_station' => $values['from_station']->station_id,
                    'to_station' => $values['to_station']->station_id,
                    'from_date' => $values['from_date'],
                    'no_of_passengers' => $values['no_of_passengers']
                ));
            } catch (PDOException $e) {
                die($e->getMessage());
            }

            if ($data > 0) {
                return $data;
            }
        }
        return $errors;
    }

    public function addTrain()
    {
        $con = $this->connect();
        $errors = array();

        // Check if required fields are empty
        if (empty($_POST['train_name'])) {
            $errors['train_name'] = 'Train Name is required';
        }

        if (empty($_POST['train_route'])) {
            $errors['train_route'] = 'Train route is required';
        }

        if (empty($_POST['start_station'])) {
            $errors['start_station'] = 'Start Station is required';
        }

        if (empty($_POST['end_station'])) {
            $errors['end_station'] = 'End Station is required';
        }

        if (empty($_POST['start_time'])) {
            $errors['start_time'] = 'Start Time is required';
        }

        if (empty($_POST['end_time'])) {
            $errors['end_time'] = 'End Time is required';
        }

        if (empty($_POST['train_type'])) {
            $errors['train_type'] = 'Train Type is required';
        }

        if (empty($errors)) {
            try {
                // $con = $this->connect();
                $con->beginTransaction();

                $query = "INSERT INTO tbl_train (train_name, train_type, train_start_time, train_end_time, train_start_station, train_end_station, train_route, train_status)
                          VALUES (:train_name, :train_type, :train_start_time, :train_end_time, :train_start_station, :train_end_station, :train_route, 'Not Arrived')";

                $stm = $con->prepare($query);
                $out = $stm->execute(
                    array(
                        'train_name' => $_POST['train_name'],
                        'train_type' => $_POST['train_type'],
                        'train_start_time' => $_POST['start_time'],
                        'train_end_time' => $_POST['end_time'],
                        'train_start_station' => $_POST['start_station'],
                        'train_end_station' => $_POST['end_station'],
                        'train_route' => $_POST['train_route']
                    )
                );

                $train_id = $con->lastInsertId();

                foreach ($_POST['stopping_station']['id'] as $key => $value) {
                    $query_stop_staion = "INSERT INTO tbl_train_stop_station (train_id, station_id, stop_no)
                          VALUES (:train_id, :station_id, :stop_no)";
                    $stm3 = $con->prepare($query_stop_staion);
                    $out3 = $stm3->execute(
                        array(
                            'train_id' => $train_id,
                            'station_id' => $value,
                            'stop_no' => $key + 1
                        )
                    );
                }


                // compartment tbl
                foreach ($_POST['compartment']['class'] as $key => $value) {

                    $query_compartment = "INSERT INTO tbl_compartment (compartment_train_id, compartment_class_type, compartment_class, compartment_seat_layout, compartment_total_seats, compartment_total_number)
                              VALUES (:compartment_train_id, :compartment_class_type, :compartment_class, :compartment_seat_layout, :compartment_total_seats, :compartment_total_no)";
                    $stm2 = $con->prepare($query_compartment);
                    $out2 = $stm2->execute(
                        array(
                            'compartment_train_id' => $train_id,
                            'compartment_class_type' => $_POST['compartment']['type'][$key],
                            'compartment_class' => $value,
                            'compartment_seat_layout' => $_POST['compartment']['seat_layout'][$key],
                            'compartment_total_seats' => $_POST['compartment']['total_seats'][$key],
                            'compartment_total_no' => $_POST['compartment']['total_no'][$key]
                        )
                    );
                }
            } catch (PDOException $e) {
                $data['errors'][] = $e->getMessage();
                echo $e->getMessage();
                return $data;
            }

            $con->commit();
            // $con = null;
            return true; // Successful insertion
        }
        return $errors;
    }


    //get reservation for a specific train
    public function getTrainReservation($class_id = "", $train_id = "")
    {

        $date = $_SESSION['reservation']['from_date'];

        try {
            $query = "SELECT t.*, r.*, c.*, ct.*,\n"
                . "start.station_name AS start_station,\n"

                . "end.station_name AS end_station\n"

                . " FROM tbl_train t\n"

                . " JOIN tbl_reservation r ON t.train_id = r.reservation_train_id\n"

                . " JOIN tbl_station start ON t.train_start_station = start.station_id\n"

                . " JOIN tbl_station end ON t.train_end_station = end.station_id\n"

                . " JOIN tbl_compartment c ON r.reservation_compartment_id = c.compartment_id\n"

                . " JOIN tbl_compartment_class_type ct ON ct.compartment_class_type_id = c.compartment_class_type\n"

                . " WHERE r.reservation_train_id = :train_id AND r.reservation_compartment_id = :class AND r.reservation_date = :date";

            $data = $this->query($query, array(
                'train_id' => $train_id,
                'class' => $class_id,
                'date' => $date
            ));
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        if ($data > 0) {
            return $data;
        }
    }

    public function getTrain($id)
    {
        try {
           

            //insert query to search train must come form route
            $query = "SELECT\n"

                . "tbl_train.*,\n"

                . "start.station_name AS start_station,\n"

                . "end.station_name AS end_station\n"

                . "\n"

                . "FROM\n"

                . "	tbl_train\n"

                . "JOIN\n"

                . "	tbl_station AS start ON tbl_train.train_start_station = start.station_id\n"

                . " JOIN\n"

                . " 	tbl_station AS end ON tbl_train.train_end_station = end.station_id\n"

                . "WHERE\n"

                . "	tbl_train.train_id = :train_id LIMIT 1";

            $data = $this->query($query, array(
                'train_id' => $id
            ));
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        
            return $data;
    }

    public function updateTrain($id, $data)
    {
        $con = $this->connect();
        $errors = array();

        // Check if required fields are empty
        if (empty($data['train_name'])) {
            $errors['train_name'] = 'Train Name is required';
        }

        if (empty($data['train_route'])) {
            $errors['train_route'] = 'Train route is required';
        }

        if (empty($data['start_station'])) {
            $errors['start_station'] = 'Start Station is required';
        }

        if (empty($data['end_station'])) {
            $errors['end_station'] = 'End Station is required';
        }

        if (empty($data['start_time'])) {
            $errors['start_time'] = 'Start Time is required';
        }

        if (empty($data['end_time'])) {
            $errors['end_time'] = 'End Time is required';
        }

        if (empty($data['train_type'])) {
            $errors['train_type'] = 'Train Type is required';
        }

        if (empty($errors)) {
            try {
                $query = "UPDATE tbl_train SET train_name = :train_name, train_type = :train_type, train_start_time = :train_start_time, train_end_time = :train_end_time, train_start_station = :train_start_station, train_end_station = :train_end_station, train_route = :train_route WHERE train_id = :train_id";

                $stm = $con->prepare($query);
                $stm->execute(
                    array(
                        'train_name' => $data['train_name'],
                        'train_type' => $data['train_type'],
                        'train_start_time' => $data['start_time'],
                        'train_end_time' => $data['end_time'],
                        'train_start_station' => $data['start_station'],
                        'train_end_station' => $data['end_station'],
                        'train_route' => $data['train_route'],
                        'train_id' => $id
                    )
                );

                return true; // Successful insertion
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        return $errors;
    }

    //Update Train Status
    public function updateStatus($id, $data)
    {
        $con = $this->connect();
        $errors = array();

        try {
            $query = "UPDATE tbl_train SET  WHERE train_id = :train_id";

            $stm = $con->prepare($query);
            $stm->execute(
                array(
                    'train_name' => $data['train_name'],
                    'train_type' => $data['train_type'],
                    'train_start_time' => $data['start_time'],
                    'train_end_time' => $data['end_time'],
                    'train_start_station' => $data['start_station'],
                    'train_end_station' => $data['end_station'],
                    'train_route' => $data['train_route'],
                    'train_id' => $id
                )
            );

            return true; // Successful insertion
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}
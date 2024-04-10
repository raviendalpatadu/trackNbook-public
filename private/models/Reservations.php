<?php

class Reservations extends Model
{
    protected $table = 'tbl_reservation';
    protected $allowedColumns = array('reservation_id', 'reservation_ticket_id', 'reservation_passenger_id', 'reservation_start_station', 'reservation_end_station', 'reservation_train_id', 'reservation_compartment_id', 'reservation_date', 'reservation_seat', 'reservation_passenger_title', 'reservation_passenger_first_name', 'reservation_passenger_last_name', 'reservation_passenger_nic', 'reservation_passenger_phone_number', 'reservation_passenger_email', 'reservation_passenger_gender', 'reservation_created_time', 'reservation_status');



    public function __construct()
    {
        parent::__construct();
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function validatePassenger($data)
    {
        $errors = array();

        for ($entry = 0; $entry < count($data['reservation_passenger_title']); $entry++) {

            //check if title exists in post
            if (empty($data['reservation_passenger_title'][$entry])) {
                $this->errors['reservation_passenger_title'][$entry] = 'Title is required';
            }

            //check if first name is exists in post
            if (empty($data['reservation_passenger_first_name'][$entry])) {
                $this->errors['reservation_passenger_first_name'][$entry] = 'First Name is required';
            }

            //check if last name is exists in post
            if (empty($data['reservation_passenger_last_name'][$entry])) {
                $this->errors['reservation_passenger_last_name'][$entry] = 'Last Name is required';
            }

            //check if phone number is exists in post
            if (empty($data['reservation_passenger_phone_number'][$entry])) {
                $this->errors['reservation_passenger_phone_number'][$entry] = 'Phone Number is required';
            }

            // 10 number validation
            if (strlen($data['reservation_passenger_phone_number'][$entry]) != 10) {
                $this->errors['reservation_passenger_phone_number'][$entry] = 'Phone Number is invalid';
            }

            //check nic is exists in post
            if (empty($data['reservation_passenger_nic'][$entry])) {
                $this->errors['reservation_passenger_nic'][$entry] = 'NIC is required';
            } else {
                // 10 number validation o rGroup13 - SRS-TrackNBookm in it
                if (strlen($data['reservation_passenger_nic'][$entry]) != 12) {
                    if (strlen($data['reservation_passenger_nic'][$entry]) == 10) {
                        $last_char = strtolower(substr($data['reservation_passenger_nic'][$entry], -1));
                        if ($last_char != 'v') {
                            $this->errors['reservation_passenger_nic'][$entry] = 'NIC is invalid last char is not V or v';
                        }
                    } else {
                        $this->errors['reservation_passenger_nic'][$entry] = 'NIC is invalid';
                    }
                }
            }



            //check if email is exists in post
            if (empty($data['reservation_passenger_email'][$entry])) {
                $this->errors['reservation_passenger_email'][$entry] = 'Email is required';
            }

            //check if email is valid
            if (!filter_var($_POST['reservation_passenger_email'][$entry], FILTER_VALIDATE_EMAIL)) {
                $this->errors['reservation_passenger_email'][$entry] = 'Invalid Email';
            }

            // check gender
            if (empty($data['reservation_passenger_gender'][$entry])) {
                $this->errors['reservation_passenger_gender'][$entry] = 'Gender Required';
            }

            // check if warrent is uploaded
            if (isset($data['warrant_booking']) && empty($_FILES['warrant_image']['name']) && $data['warrant_booking'] == "on") {
                $this->errors['warrant_image'] = 'Warrent is required';
            }
        }

        if (count($this->errors) > 0) {
            return false;
        }
        return true;
    }

    public function getReservation()
    {
        try {
            $result = $this->findAll();
            //sort an array in assending order
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $result;
    }
    public function getReservations($id)
    {

        try {

            $query = "SELECT
                            	r.*,
                                tstop_start_time.train_stop_time AS estimated_departure_time,
                                tstop_end_time.train_stop_time AS estimated_arrival_time,
                                s.station_name AS reservation_start_station,
                                e.station_name AS reservation_end_station,
                                ct.compartment_class_type AS reservation_compartment_type
                        FROM
                            tbl_reservation r
                            JOIN tbl_train_stop_station tstop_start_time ON tstop_start_time.station_id = r.reservation_start_station
                            JOIN tbl_train_stop_station tstop_end_time ON tstop_end_time.station_id = r.reservation_end_station
                            JOIN tbl_station s ON s.station_id = r.reservation_start_station
                            JOIN tbl_station e ON e.station_id = r.reservation_end_station
                            JOIN tbl_compartment c ON c.compartment_id = r.reservation_compartment_id
                            JOIN tbl_compartment_class_type ct ON ct.compartment_class_type_id = c.compartment_class_type
                        WHERE
                            r.reservation_passenger_id = :reservation_passenger_id
                        GROUP BY
                            r.reservation_seat,
	                        r.reservation_ticket_id";

            $result = $this->query($query, array(
                'reservation_passenger_id' => $id
            ));
            //sort an array in assending order
            if ($result > 0) {
                return $result;
            } else {
                return 0;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getReservationDataTicket($id)
    {
        if ($id == '') {
            return 'false';
        }
        try {
            $query = "SELECT
                            	r.*,
                                t.train_name AS reservation_train_name,
                                tstop_start_time.train_stop_time AS estimated_departure_time,
                                tstop_end_time.train_stop_time AS estimated_arrival_time,
                                s.station_name AS reservation_start_station,
                                e.station_name AS reservation_end_station,
                                ct.compartment_class_type AS reservation_compartment_type
                        FROM
                            tbl_reservation r
                            JOIN tbl_train_stop_station tstop_start_time ON tstop_start_time.station_id = r.reservation_start_station
                            JOIN tbl_train_stop_station tstop_end_time ON tstop_end_time.station_id = r.reservation_end_station
                            JOIN tbl_station s ON s.station_id = r.reservation_start_station
                            JOIN tbl_station e ON e.station_id = r.reservation_end_station
                            JOIN tbl_compartment c ON c.compartment_id = r.reservation_compartment_id
                            JOIN tbl_compartment_class_type ct ON ct.compartment_class_type_id = c.compartment_class_type
                            JOIN tbl_train t ON t.train_id = r.reservation_train_id
                        WHERE
                            r.reservation_ticket_id = :reservation_ticket_id
                        GROUP BY
                            r.reservation_seat,
	                        r.reservation_ticket_id";

            $result = $this->query($query, array(
                'reservation_ticket_id' => $id
            ));
            //sort an array in assending order
            if ($result > 0) {
                return $result;
            } else {
                return 0;
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getOneReservation($value)
    {
        try {
            // echo "<pre>";
            // print_r($value);
            // echo "</pre>";

            $query = "SELECT * FROM tbl_reservation WHERE reservation_train_id = :train_id AND reservation_compartment_id = :class_id AND reservation_start_station = :from_station AND reservation_end_station = :to_station AND reservation_date = :from_date";
            $result = $this->query($query, array(
                'train_id' => $value['train_id'],
                'class_id' => $value['class_id'],
                'from_station' => $value['from_station'],
                'to_station' => $value['to_station'],
                'from_date' => "2024-01-29"
                // 'selected_seats' => $value['selected_seats']
            ));
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $result;
    }


    // cancel reservation

}

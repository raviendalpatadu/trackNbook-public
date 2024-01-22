<?php

class Reservations extends Model
{
    protected $table = 'tbl_reservation';
    protected $allowedColumns = array();

    public function __construct()
    {
        parent::__construct();
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
    public function getReservations($column, $value)
    {

        try {
            $result = $this->where($column, $value);
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

    public function getOneReservation($value)
    {
        try {
            // echo "<pre>";
            // print_r($value);
            // echo "</pre>";

            $query = "SELECT * FROM tbl_reservation WHERE reservation_train_id = :train_id AND reservation_class = :class_id AND reservation_start_station = :from_station AND reservation_end_station = :to_station AND reservation_date = :from_date";
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

    public function addReservation($data)
    {
        $user_id = $_SESSION['USER']->user_id;
        $train_id = $data['train_id'];
        $class_id = $data['class_id'];
        $from_station = $data['from_station'];
        $to_station = $data['to_station'];
        $from_date = $data['from_date'];
        $selected_seats = $data['selected_seats'];
        $no_of_passengers = $data['no_of_passengers'];
        $passenger_titles = $data['passenger_data']['user_title'];
        $passenger_first_names = $data['passenger_data']['user_first_name'];
        $passenger_last_names = $data['passenger_data']['user_last_name'];
        $passenger_nics = $data['passenger_data']['user_nic'];
        $passenger_phone_numbers = $data['passenger_data']['user_phone_number'];
        $passenger_emails = $data['passenger_data']['user_email'];


        try {

            for ($insert_count = 0; $insert_count < $no_of_passengers; $insert_count++) {
                $query = "INSERT INTO tbl_reservation "
                    . "(reservation_passenger_id, reservation_start_station, reservation_end_station, reservation_train_id, reservation_compartment_id, reservation_date, reservation_class, reservation_seat, reservation_passenger_title, reservation_passenger_first_name, reservation_passenger_last_name, reservation_passenger_nic, reservation_passenger_phone_number, reservation_passenger_email, reservation_passenger_gender) "
                    . "VALUES(:passenger_id, :from_station, :end_station, :train_id, :compartment_id, :date, :class_id, :seat, :title, :first_name, :last_name, :nic, :phone_number, :email, :gender)";
                // echo $query . "<br>";
                $this->query($query, array(
                    'passenger_id' => $user_id,
                    'from_station' => $from_station,
                    'end_station' => $to_station,
                    'train_id' => $train_id,
                    'compartment_id' => $class_id,
                    'date' => $from_date,
                    'class_id' => $class_id,
                    'seat' => $selected_seats[$insert_count],
                    'title' => $passenger_titles[$insert_count],
                    'first_name' => $passenger_first_names[$insert_count],
                    'last_name' => $passenger_last_names[$insert_count],
                    'nic' => $passenger_nics[$insert_count],
                    'phone_number' => $passenger_phone_numbers[$insert_count],
                    'email' => $passenger_emails[$insert_count],
                    'gender' => $data['passenger_data']['user_gender' . $insert_count]
                ));
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }

        return true;

    }

    public function cancelReservation($reservation_id, $passenger_nic)
    {
        try {
            $con = $this->connect();
            $query = "DELETE FROM tbl_reservation WHERE reservation_id = :reservation_id AND reservation_passenger_nic = :passenger_nic";
            $stm = $con->prepare($query);
            $stm->execute(array(
                'reservation_id' => $reservation_id,
                'passenger_nic' => $passenger_nic
            ));
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        $con = null;
    
        // echo true;//for ajax call
        return true;   
    }
}

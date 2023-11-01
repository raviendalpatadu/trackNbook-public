<?php

class Reservations extends Model
{
    protected $table = 'tbl_reservation';

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

    public function getOneReservation($column, $value)
    {
        try {
            $result = $this->whereOne($column, $value);
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
            $con = $this->connect();
            for ($insert_count = 0; $insert_count < $no_of_passengers; $insert_count++) {
                $query = "INSERT INTO tbl_reservation "
                    . "(reservation_passenger_id, reservation_start_station, reservation_end_station, reservation_train_id, reservation_date, reservation_class, reservation_seat, reservation_passenger_title, reservation_passenger_first_name, reservation_passenger_last_name, reservation_passenger_nic, reservation_passenger_phone_number, reservation_passenger_email, reservation_passenger_gender) "
                    . "VALUES(:passenger_id, :from_station, :end_station, :train_id, :date, :class_id, :seat, :title, :first_name, :last_name, :nic, :phone_number, :email, :gender)";
                // echo $query . "<br>";
                $stm = $con->prepare($query);
                $stm->execute(array(
                    'passenger_id' => $user_id,
                    'from_station' => $from_station,
                    'end_station' => $to_station,
                    'train_id' => $train_id,
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
        $con = null;

        // unset($_SESSION['reservation']);
        return true;

    }
}

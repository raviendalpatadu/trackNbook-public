<?php

class Trains extends Model
{
    private $con;
    public function __construct($con)
    {
        $this->con = $con;
        parent::__construct();
    }


    public function search()
    {
        $errors = array();


        $data = array();
        //   //check if to_station is exists in post
        if (empty($_POST['to_station']) || $_POST['to_station'] == 0) {
            $errors['errors']['to_station'] = 'Station is required';
        }

        //check if from_station is exists in post
        if (empty($_POST['from_station']) || $_POST['from_station'] == 0) {
            $errors['errors']['from_station'] = 'Staion is required';
        }

        //check if from staion = to_station
        if (!(array_key_exists('errors', $errors)) && $_POST['from_station'] == $_POST['to_station']) {
            $errors['errors']['from_station'] = 'From and To stations are same';
            $errors['errors']['to_station'] = 'From and To stations are same';
        }

        //check if from date is exists in post
        if (empty($_POST['from_date'])) {
            $errors['errors']['from_date'] = 'date is required';
        }

        if (isset($_POST['return'])) {
            //check if to date is exists in post
            if (empty($_POST['to_date'])) {
                $errors['errors']['to_date'] = 'Date is required';
            }
        }

        //check if from no of passengers is exists in post
        if (empty($_POST['no_of_passengers'])) {
            $errors['errors']['no_of_passengers'] = 'Passenger count is required';
        }


        if (!array_key_exists('errors', $errors)) {

            try {
                $con = $this->connect();
                $con->beginTransaction();

                //insert query to search train must come form route
                $query = "SELECT * FROM tbl_train WHERE train_start_station = :from_station AND train_end_station = :to_station";
                $stm = $con->prepare($query);

                $stm->execute(
                    array(
                        'from_station' => $_POST['from_station'],
                        'to_station' => $_POST['to_station']
                    )
                );

                $data = $stm->fetchAll(PDO::FETCH_OBJ);

            } catch (PDOException $e) {
                echo $e->getMessage();
            }

            if ($data > 0) {
                return $data;
            }
        }
        return $errors;

    }

    public function addTrain($data)
    {
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
                $query = "INSERT INTO tbl_train (train_name, train_type, train_start_time, train_end_time, train_start_station, train_end_station, train_route)
                          VALUES (:train_name, :train_type, :train_start_time, :train_end_time, :train_start_station, :train_end_station, :train_route)";

                $stm = $this->con->prepare($query);
                $stm->execute($data);

                return true; // Successful insertion
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }


}

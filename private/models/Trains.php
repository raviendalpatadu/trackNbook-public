<?php

class Trains extends Model{
    public function __construct(){
        parent::__construct();
    }


    public function search(){
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
        if (!(array_key_exists('errors',$errors)) && $_POST['from_station'] == $_POST['to_station']) {
            $errors['errors']['from_station'] = 'From and To stations are same';
            $errors['errors']['to_station'] = 'From and To stations are same';
        }

        //check if from date is exists in post
        if (empty($_POST['from_date'])) {
            $errors['errors']['from_date'] = 'date is required';
        }

        if(isset($_POST['return'])){
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
            
                . "	tbl_train.train_start_station = :from_station AND tbl_train.train_end_station = :to_station;";
                $stm = $con->prepare($query);

                $stm->execute(array(
                    'from_station' => $_POST['from_station'],
                    'to_station' => $_POST['to_station']
                ));

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

    
}

<?php

class Stations extends Model
{
    protected $table = 'tbl_station';

    public function __construct()
    {
        parent::__construct();
    }

    public function findAllStation()
    {
        $data = array();
        try {
            $con = $this->connect();
            $con->beginTransaction();

            //insert query to search train must come form route
            $query = "SELECT * FROM tbl_station";
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

    public function getStations()
    {
        try {
            $result = $this->findAll();
            //sort an array in assending order
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $result;
    }

    public function getOneStation($column, $value)
    {
        try {
            $result = $this->whereOne($column, $value);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $result;
    }




}
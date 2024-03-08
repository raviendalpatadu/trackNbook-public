<?php

class Stations extends Model
{
    protected $table = 'tbl_station';

    public function __construct()
    {
        parent::__construct();
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

    public function addStation()
    {
        try {
            $con = $this->connect();
            $con->beginTransaction();

            $query = "INSERT INTO tbl_station (station_name) VALUES (:station_name)";
            $stm = $con->prepare($query);
            $stm->execute(
                array(
                    'station_name' => $stationName
                )
            );

            $stationId = $con->lastInsertId();

            $con->commit();
            $con = null;

            return $stationId;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }


    }

}

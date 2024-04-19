<?php

class TrainStopStations extends Model
{
    protected $table = 'tbl_train_stop_station';
    protected $allowedColumns = ['train_id', 'station_id', 'train_stop_time', 'stop_no'];
   

    public function __construct()
    {
        parent::__construct();
    }

    public function getTrainStopStations($train_id)
    {
        $query = "SELECT * FROM $this->table WHERE train_id = :train_id ORDER BY stop_no";
        return $this->query($query, ['train_id' => $train_id]);
    }

   
}
<?php

class TrainLocation extends Model
{
    protected $table = 'tbl_train_location';
    protected $allowedColumns = ['train_id', 'date', 'trainlocation', 'train_location_update_time'];


    public function updateStopStation($station_id, $train_id)
    {

        $query = "UPDATE tbl_train_location tbl
        JOIN tbl_station tss ON tbl.trainlocation = tss.station_id
        SET tbl.station_id = :station_id
        WHERE tss.train_id = :train_id
        AND date = :date";
        return $this->query($query, [
            'station_id' => $station_id,
            'train_id' => $train_id,
            'date' => date('Y-m-d')
        ]);
    }

    // public function getCurrentLocation($train_id){
    //     $query = "SELECT * FROM tbl_train_location WHERE train_id = :train_id AND date = :date";
    //     return $this->query($query, [
    //         'train_id' => $train_id,
    //         'date' => date('Y-m-d')
    //     ]);
    // }
}
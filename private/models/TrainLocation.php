<?php

class TrainLocation extends Model
{
    protected $table = 'tbl_train_location';
    protected $allowedColumns = ['train_id', 'station_id', 'train_stop_time', 'stop_no'];
   

    public function updateStopStation($station_id)
    {
        $query = "UPDATE tbl_train_location tl
        JOIN $this->table tss ON tbl.train_location = tss.station_id
        SET tl.station_id = :station_id
        WHERE tss.train_id = :train_id";
        return $this->query($query, ['station_id' => $station_id]);
    }
}
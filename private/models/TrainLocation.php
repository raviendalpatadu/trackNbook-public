<?php

class TrainLocation extends Model
{
    protected $table = 'tbl_train_location';
    protected $allowedColumns = ['train_id', 'date', 'train_location', 'train_location_updated_time'];
   

    // public function updateStation($station_id)
    // {
    //     $query = "UPDATE tbl_train_location tl
    //     JOIN $this->table tss ON tbl.train_location = tss.station_id
    //     SET tl.station_id = :station_id
    //     WHERE tss.train_id = :train_id";
    //     return $this->query($query, ['station_id' => $station_id]);
    // }
}
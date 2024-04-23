<?php

class StationMasters extends Model{
    protected $table = 'tbl_station_master';
    protected $allowedColumns = array('station_master_id', 'station_master_station');

    public function __construct(){
        parent::__construct();
    }   
}


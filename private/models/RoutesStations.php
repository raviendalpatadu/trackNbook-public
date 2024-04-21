<?php

class RoutesStations extends Model
{
    protected $table = 'tbl_route_station';
    protected $allowedColumns = array('route_no', 'station_id', 'route_station_order');

    public function __construct()
    {
        parent::__construct();
    }

}

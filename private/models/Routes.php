<?php

class Routes extends Model
{
    protected $table = 'tbl_route';

    public function __construct()
    {
        parent::__construct();
    }

    public function getRoute()
    {
        try {
            $result = $this->findAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $result;
    }

    public function getRouteStationsWithStartAndEndStaions($route_id, $start_station, $end_station)
    {
        try {
            $query = "SELECT s.*
                        FROM tbl_station s
                        JOIN tbl_route_station r ON r.station_id = s.station_id 
                        WHERE r.route_no = :route_id
                        ORDER BY
                            CASE
                                WHEN 
                                    (SELECT route_station_order FROM tbl_route_station WHERE station_id = :start_station AND route_no = :route_id) < 
                                    (SELECT route_station_order FROM tbl_route_station WHERE station_id = :end_station AND route_no = :route_id)
                                THEN r.route_station_order
                                ELSE r.route_station_order * -1
                            END;";

        $result = $this->query($query, [
            'route_id' => $route_id,
            'start_station' => $start_station,
            'end_station' => $end_station
        ]);

            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function getRouteStations($route_id)
    {
        try {
            $query = "SELECT s.*
                        FROM tbl_station s
                        JOIN tbl_route_station r ON r.station_id = s.station_id 
                        WHERE r.route_no = :route_id;";

        $result = $this->query($query, [
            'route_id' => $route_id
        ]);

            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

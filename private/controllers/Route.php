<?php

class Route extends Controller
{
    public function getRouteStations(){
        $route = new Routes();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $route_stations = $route->getRouteStations($_POST['route_id']);
            
            echo json_encode($route_stations);
        }
    }
    public function getRouteStationsWithStartAndEndStaions(){
        $route = new Routes();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $route_stations = $route->getRouteStationsWithStartAndEndStaions($_POST['route_id'], $_POST['start_station_id'], $_POST['end_station_id']);
            
            echo json_encode($route_stations);
        }
    }
}

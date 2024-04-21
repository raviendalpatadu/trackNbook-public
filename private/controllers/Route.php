<?php

class Route extends Controller
{
    public function getRouteStations($route_id)
    {
        $route = new Routes();

        $route_stations = $route->getRouteStations($route_id);

        echo json_encode($route_stations);
    }
    public function getRouteStationsWithStartAndEndStaions()
    {
        $route = new Routes();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $route_stations = $route->getRouteStationsWithStartAndEndStaions($_POST['route_id'], $_POST['start_station_id'], $_POST['end_station_id']);

            echo json_encode($route_stations);
        }
    }

    public function addRoute()
    {
        $data = array();
        // data['stations'] send them to view
        $station = new Stations();
        $data['stations'] = $station->findAll();

        if (isset($_POST['submit'])) {
            // $route = new Routes();
            
            // $rid = rute->insert([route_name => $_POST['route_name']);

            // route_station = new RouteStations();

            // foreach ($_POST['station'] as $key => $value) {
                // $route_station->insert([route_id => $rid, station_id => $value, station_order => $key]);
            // }

            // header('location: /route/add');
        }

        $this->view("add.route.admin", $data);
    }
}

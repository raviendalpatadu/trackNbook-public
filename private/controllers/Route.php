<?php

class Route extends Controller
{
    public function getRouteStations($route_id){
        $route = new Routes();
        
        $route_stations = $route->getRouteStations($route_id);
            
        echo json_encode($route_stations);
        
    }
    public function getRouteStationsWithStartAndEndStaions(){
        $route = new Routes();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $route_stations = $route->getRouteStationsWithStartAndEndStaions($_POST['route_id'], $_POST['start_station_id'], $_POST['end_station_id']);
            
            echo json_encode($route_stations);
        }
    }

    public function addRoute(){

        if(isset($_POST['submit'])){
        
        $route = new Routes();
        $result = $route->addRoute();

        if($result){
            //echo a success message
            echo "Route added successfully";
        }else{
            $data['errors'] = $result;
        }
    }

    $this->view("add.route.admin", $data);

    }

}

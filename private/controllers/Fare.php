<?php

/**
 * Fare controller
 */

class Fare extends Controller
{
    function index($id = '')
    {
        $route = new Routes();
        $data['routes'] = $route->getRoute();

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
           echo "<pre>";
              print_r($_POST);
            echo "</pre>";
        }
        $this->view('add.fare', $data);
    }
    

}
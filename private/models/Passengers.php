<?php
class Passengers extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function getPassengers(){
        $result = $this->findAll();
        return $result;
    }

}   
?>
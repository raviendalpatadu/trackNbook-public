<?php

class Stations extends Model{
    protected $table = 'tbl_station';

    public function __construct(){
        parent::__construct();
    }

    public function getStations(){
        try{
            $result = $this->findAll();
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
        return $result;
    }

    
}

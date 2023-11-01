<?php

class Stations extends Model{
    protected $table = 'tbl_station';

    public function __construct(){
        parent::__construct();
    }

    public function getStations(){
        try{
            $result = $this->findAll();
            //sort an array in assending order
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
        return $result;
    }

    public function getOneStation($column, $value){
        try{
            $result = $this->whereOne($column, $value);
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
        return $result;
    }

    
}

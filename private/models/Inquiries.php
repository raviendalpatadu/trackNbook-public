<?php

class Inquiries extends Model{
    protected $table = 'tbl_inquiriy';
    protected $allowedColumns = array('inquiry_id','inquiry_passenger_id', 'inquiry_ticket_id', 'inquiry_station', 'inquiry_reason', 'inquiry_status');

    public function __construct(){
        parent::__construct();
    }   

    //meed function to get the inquiries based on the inquiry_station
    public function getStationInquiry(){
        $query = "SELECT * FROM tbl_inquiry WHERE inquiry_station = :station";
        $data = $this->query($query, array('station' => $_SESSION['USER']->user_data));
        if(is_array($data)){
            return $data;
        }
        return [];
    }


}


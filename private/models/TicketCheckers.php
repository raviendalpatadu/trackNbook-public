<?php

class TicketCheckers extends Model{
    protected $table = 'tbl_ticket_checker';
    protected $allowedColumns = array('ticket_checker_id', 'ticket_checker_pin_code', 'pin_changed');

    public function __construct(){
        parent::__construct();
    }   
}


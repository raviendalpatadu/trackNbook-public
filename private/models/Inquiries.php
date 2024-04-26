<?php

class Inquiries extends Model
{
    protected $table = 'tbl_inquiry';
    protected $allowedColumns = ['inquiry_passenger_id', 'inquiry_ticket_id', 'inquiry_station', 'inquiry_reason', 'inquiry_status'];

    public function __construct()
    {
        parent::__construct();
    }

    public function validateInquiry($data)
    {
        

        if (empty($data['inquiry_ticket_id'])) {
            $this->errors['inquiry_ticket_id'] = 'Ticket ID is required';
        }

        if (empty($data['inquiry_station'])) {
            $this->errors['inquiry_station'] = 'Station is required';
        }

        if (empty($data['inquiry_reason'])) {
            $this->errors['inquiry_reason'] = 'Inquiry reason is required';
        }

        if(count($this->errors) > 0){
            return false;
        }

        return true;
    }
}

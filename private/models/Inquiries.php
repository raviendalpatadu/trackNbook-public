<?php

class Inquiries extends Model
{
    protected $table = 'tbl_inquiry';
    protected $allowedColumns = ['inquiry_passenger_id', 'inquiry_ticket_id', 'inquiry_station', 'inquiry_reason', 'inquiry_status', 'inquiry_created_time', 'inquiry_to_station_master'];

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

        if (count($this->errors) > 0) {
            return false;
        }

        return true;
    }

    public function getInquiry()
    {
        try {
            $query = "SELECT i.*,
                    r.*,
                    u.*,
                    t.train_start_station,
                    t.train_end_station,
                    t.train_name,
                    t.train_start_time,
                    t.train_end_time,
                    t.train_type,
                    ctt.compartment_class_type,
                    tt.train_type,
                    start_st.station_name AS start_station_name,
                    end_st.station_name AS end_station_name
                FROM tbl_inquiry i
                    INNER JOIN tbl_user u ON i.inquiry_passenger_id = u.user_id
                    INNER JOIN tbl_staff_ticketing st ON i.inquiry_station = st.staff_ticketing_station
                    INNER JOIN tbl_reservation r ON i.inquiry_ticket_id = r.reservation_ticket_id
                    INNER JOIN tbl_train t ON r.reservation_train_id = t.train_id
                    JOIN tbl_compartment c ON r.reservation_compartment_id = c.compartment_id
                    JOIN tbl_compartment_class_type ctt ON c.compartment_class_type = ctt.compartment_class_type_id
                    JOIN tbl_train_type tt ON t.train_type = tt.train_type_id
                    JOIN tbl_station start_st ON t.train_start_station = start_st.station_id
                    JOIN tbl_station end_st ON t.train_end_station = end_st.station_id
               
                GROUP BY i.inquiry_id;";

            $result = $this->query($query);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        if(is_array($result) && count($result) > 0){
            return $result;
        }
        return [];
    }
}

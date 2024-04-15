<?php

class WaitingLists extends Model
{
    protected $table = 'tbl_waiting_list';
    protected $allowedColumns = array('waiting_list_passenger_id', 'waiting_list_train_id', 'waiting_list_compartment_id', 'waiting_list_reservation_start_station', 'waiting_list_reservation_end_station', 'waiting_list_reservation_date', 'waiting_list_status');

    public function __construct()
    {
        parent::__construct();
    }

    public function validate($values)
    {
        if (empty($values['waiting_list_passenger_id'])) {
            $this->errors['waiting_list_passenger_id'] =  "Passenger id is required.";
        }

        if (empty($values['waiting_list_train_id'])) {
            $this->errors['waiting_list_train_id'] =  "Train id is required.";
        }

        if (empty($values['waiting_list_compartment_id'])) {
            $this->errors['waiting_list_compartment_id'] =  "Compartment id is required.";
        }

        if (empty($values['waiting_list_reservation_start_station'])) {
            $this->errors['waiting_list_reservation_start_station'] =  "Start station is required.";
        }

        if (empty($values['waiting_list_reservation_end_station'])) {
            $this->errors['waiting_list_reservation_end_station'] =  "End station is required.";
        }

        if (empty($values['waiting_list_reservation_date'])) {
            $this->errors['waiting_list_reservation_date'] =  "Date is required.";
        }


        if (count($this->errors) ==  0) {
            return true;
        }
        return false;
    }


    public function getWaitingListPassenger($id)
    {
        $query = "WITH SortedRows AS (
            SELECT
                *,
                ROW_NUMBER() OVER (PARTITION BY waiting_list_train_id, waiting_list_compartment_id, waiting_list_reservation_date ORDER BY waiting_list_time_created) AS priority_number
            FROM
                tbl_waiting_list
        )
        SELECT
            s.*,
            start_st.station_name AS start_station_name,
            end_st.station_name AS end_station_name,
            t.train_name,
            t.train_type,
            ct.compartment_class_type,
            ts_start.train_stop_time AS estimated_start_time,
            ts_end.train_stop_time AS estimated_end_time
            
        FROM
           SortedRows s
           JOIN tbl_station start_st ON s.waiting_list_reservation_start_station = start_st.station_id
           JOIN tbl_station end_st ON s.waiting_list_reservation_end_station = end_st.station_id
           JOIN tbl_train t ON s.waiting_list_train_id = t.train_id
           JOIN tbl_compartment c ON s.waiting_list_compartment_id = c.compartment_id
           JOIN tbl_compartment_class_type ct ON c.compartment_class_type = ct.compartment_class_type_id
           JOIN tbl_train_stop_station ts_start ON ts_start.train_id = s.waiting_list_train_id and ts_start.station_id = s.waiting_list_reservation_start_station
           JOIN tbl_train_stop_station ts_end ON ts_end.train_id = s.waiting_list_train_id and ts_end.station_id = s.waiting_list_reservation_end_station
        WHERE
          waiting_list_passenger_id = :passenger_id
        ORDER BY
            waiting_list_train_id, waiting_list_compartment_id, waiting_list_reservation_date, waiting_list_time_created;";
        $result = $this->query($query, array(':passenger_id' => $id));

        return $result;
    }
}

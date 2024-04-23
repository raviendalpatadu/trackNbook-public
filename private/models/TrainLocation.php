<?php

class TrainLocation extends Model
{
    protected $table = 'tbl_train_location';
    protected $allowedColumns = ['train_id', 'date', 'train_location', 'train_location_updated_time'];


    public function validate($data)
    {
        // if the station is a previous station
        if (isset($data['train_id']) && isset($data['train_location'])) {
            if ($this->isPreviousStation($data['train_id'], $data['train_location'])) {
                $this->errors['errors']['station_id'] = 'You entered a previous station';
            }
        }

        if (!isset($data['train_id']) || empty($data['train_id'])) {
            $this->errors['errors']['station_id'] = 'Train ID is required';
        }

        //    if train is already at the table and the date is the same, then the train is already at the station
        $query = "SELECT * FROM $this->table WHERE train_id = :train_id AND date = :date";
        $train_location = $this->query($query, ['train_id' => $data['train_id'], 'date' => $data['date']]);


        if (is_array($train_location) && count($train_location) == 0) {
            
            $this->errors['errors']['station_id'] = 'Train is no in the table';
        }

        

        if (is_array($this->errors) && count($this->errors) > 0) {
            return $this->errors;
        }

        return true;
    }


    public function isPreviousStation($train_id, $station_id)
    {
        // get the last station of the train

        $query = "SELECT *
        FROM tbl_train_location tl
        JOIN tbl_train_stop_station tss ON tl.train_id = tss.train_id AND tl.train_location = tss.station_id
        WHERE tl.train_id = :train_id AND tl.date = :date;";

        $previous_station_stop_no = $this->query($query, ['train_id' => $train_id, 'date' => date('Y-m-d')]);

        // get the current station stop number
        if (is_array($previous_station_stop_no) && count($previous_station_stop_no) > 0) {
            $train_stop_station = new TrainStopStations();
            $current_station_data = $train_stop_station->getTrainStopStationData($train_id, $station_id);
        
    
            if ($previous_station_stop_no[0]->stop_no < $current_station_data[0]->stop_no) {
                return false;
            }
            return true;
        }
        return false;
    }

    public function isTrainExists($train_id, $date)
    {
        $query = "SELECT * FROM $this->table WHERE train_id = :train_id AND date = :date";
        $train_location = $this->query($query, ['train_id' => $train_id, 'date' => $date]);

        if (is_array($train_location) && count($train_location) > 0) {
            return true;
        }
        return false;
    }

    public function updateLocation($data)
    {
        // check is the train is already in the table
        $query = "SELECT * FROM $this->table WHERE train_id = :train_id AND date = :date";
        $train_location = $this->query($query, ['train_id' => $data['train_id'], 'date' => $data['date']]);

        if (is_array($train_location) && count($train_location) > 0) {
            // update the location
            $update_query = "UPDATE $this->table SET train_location = :train_location, train_location_updated_time = :train_location_updated_time WHERE train_id = :train_id AND date = :date";
            return $this->query($update_query, $data);
        } 
        return false;
    }
}

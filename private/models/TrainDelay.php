<?php

class TrainDelay extends Model
{
    protected $table = 'tbl_train_delay';
    protected $allowedColumns = array('delay_id', 'delay_train', 'delay_station', 'delay_date', 'delay_reason');

    public function validate($trainId)
    {
        $query = "SELECT * FROM $this->table WHERE delay_train = :train_id AND delay_date = :date";
        $train_delay = $this->query($query, ['train_id' => $trainId, 'date' => date('Y-m-d')]);

        if (is_array($train_delay) && count($train_delay) > 0) {
            $this->errors['errors']['station_id'] = 'Train is already delayed';
        }

        if (is_array($this->errors) && count($this->errors) > 0) {
            return false;
        }

        return true;
    }
    public function getAllDelaysByStation($stationId)
    {
        try {
            $query = "SELECT 
                    td.*,
                    t.*,
                    tt.*
                    
                  FROM
                    $this->table td

                JOIN 
                    tbl_train t ON td.delay_train = t.train_id
                JOIN
                    tbl_train_type tt ON t.train_type = tt.train_type_id
                  WHERE
                    td.delay_station = :stationId";
            $result = $this->query($query, ['stationId' => $stationId]);

            if (is_array($result) && count($result) > 0) {
                return $result;
            }
            return [];
        } catch (PDOException $e) {
            // Log the error or handle it appropriately
            error_log("Error fetching delays: " . $e->getMessage());
            return false;
        }
    }


}

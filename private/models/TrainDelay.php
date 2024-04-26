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


}

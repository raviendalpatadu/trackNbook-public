<?php

class Homes extends Model
{


    public function __construct()
    {
        parent::__construct();
    }

    public function validate($values = array())
    {


        if (empty($values['to_station']) || $values['to_station'] == 0) {
            $this->errors['errors']['to_station'] = 'Station is required';
        }

        //check if from_station is exists in post
        if (empty($values['from_station']) || $values['from_station'] == 0) {
            $this->errors['errors']['from_station'] = 'Staion is required';
        }

        //check if from staion = to_station
        if (!(array_key_exists('errors', $this->errors)) && $values['from_station'] == $values['to_station']) {
            $this->errors['errors']['from_station'] = 'From and To stations are same';
            $this->errors['errors']['to_station'] = 'From and To stations are same';
        }

        //check if from date is exists in post
        if (empty($values['from_date'])) {
            $this->errors['errors']['from_date'] = 'date is required';
        }

        // check if from date is less than current date
        if (!(array_key_exists('errors', $this->errors)) && strtotime($values['from_date']) < strtotime(date('Y-m-d'))) {
            $this->errors['errors']['from_date'] = 'Date should be future date';
        }

        if (isset($values['return']) && $values['return'] == 'on') {
            //check if to date is exists in post
            if (empty($values['to_date'])) {
                $this->errors['errors']['to_date'] = 'To Date is required';
            }

            // check if to date is less than current date and greater than from date
            if (!(array_key_exists('errors', $this->errors)) && strtotime($values['to_date']) < strtotime(date('Y-m-d'))) {
                $this->errors['errors']['to_date'] = 'Date should be future date';
            }

            if (!(array_key_exists('errors', $this->errors)) && strtotime($values['to_date']) < strtotime($values['from_date'])) {
                $this->errors['errors']['to_date'] = 'To Date should be greater than From Date';
            }
        }



        //check if from no of passengers is exists in post
        if (empty($values['no_of_passengers'])) {
            $this->errors['errors']['no_of_passengers'] = 'Passenger count is required';
        }

        if (count($this->errors) > 0) {
            return false;
        }
        return true;
    }
}

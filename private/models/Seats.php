<?php

class Seats extends Model
{


    public function __construct()
    {
        parent::__construct();
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function validate($values = array())
    {
        if(count($values['reservation_seat']) != $values['no_of_passengers'] ){
            $this->errors['errors']['reservation_seat'] = "Select " . ($values['no_of_passengers'] -  count($values['reservation_seat'])) . " more seat(s) to proceed";
            
        }

        if ($this->isSeatReserved($values)) {
            $this->errors['errors']['reservation_seat'] = 'Seat is already reserved.';
        }

        if (count($this->errors) > 0) {
            return false;
        }

        return true;
    }

    private function isSeatReserved($values = array())
    {
             
        foreach ($values['reservation_seat'] as $seat) {
            $query = 'SELECT * FROM tbl_reservation 
                        WHERE reservation_train_id = :train_id   
                        AND reservation_compartment_id  = :class_id
                        AND reservation_date = :reservation_date
                        AND reservation_seat =  :seat_id
                        AND reservation_start_station = :from_station
                        AND reservation_end_station = :to_station';

            $data = $this->query($query, array(
                ':train_id' => $values['reservation_train_id'],
                ':class_id' => $values['reservation_compartment_id'],
                ':reservation_date' => $values['reservation_date'],
                ':seat_id' => $seat,
                ':from_station' => $values['reservation_start_station'],
                ':to_station' => $values['reservation_end_station']
            ));



            if (!empty($data)) {
                return true;
            }
        }

        return false;
    }

    public function getReservedSeats($values = array())
    {
        $query = 'SELECT reservation_seat FROM tbl_reservation 
                        WHERE reservation_train_id = :train_id   
                        AND reservation_compartment_id  = :class_id
                        AND reservation_date = :reservation_date';

        $data = $this->query($query, array(
            ':train_id' => $values['reservation_train_id'],
            ':class_id' => $values['reservation_compartment_id'],
            ':reservation_date' => $values['reservation_date']
        ));



        if (!empty($data)) {
            return $data;
        }

        return false;
    }
}

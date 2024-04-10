<?php

class Auth
{
    public static function authenticate($row)
    {
        $_SESSION['USER'] = $row;
    }
    public static function logout()
    {
        if (isset($_SESSION['USER'])) {
            unset($_SESSION['USER']);
        }
    }
    public static function is_logged_in()
    {
        if (isset($_SESSION['USER'])) {
            return true;
        }
        return false;
    }
    public static function user()
    {
        if (isset($_SESSION['USER'])) {
            return $_SESSION['USER']->user_first_name;
        }
        return false;
    }

    public static function reservation()
    {
        if (isset($_SESSION['reservation'])) {
            return $_SESSION['reservation'];
        }
        return false;
    }

    public static function __callStatic($method, $params)
    /**meken wenne unknown method ekak call karoth ee method eke name eka aran eke name session eke user ge
     * propery ekak thiyenawada balala eka return karana eka.
     * 
     * mekata function eka call karanna nam 'get' essarahata dala table eke field eke name eka danna onne
     * 
     * Eg: getlast_name()
     * 
     */
    {
        $property = strtolower(str_replace('get', '', $method));
        if (isset($_SESSION['USER']->$property)) {
            return $_SESSION['USER']->$property;
        }
        if (isset($_SESSION['reservation'][$property])) {
            return $_SESSION['reservation'][$property];
        }
        return 'unknown';
    }


    // handle payment
    public static function payment($data)
    {

        $amount = $data['from_fare']['fare_price'] * $data['no_of_passengers'] + (Auth::reservation()['return'] == 'on' ? $data['to_fare']['fare_price'] * $data['no_of_passengers'] : 0);
        $order_id = $data['reservation_id']['from'][0] . (Auth::reservation()['return'] == 'on' ? "={$data['reservation_id']['from'][0]}" : "");
        $payment['merchant_id'] = "1225507";
        $payment['return_url'] = "passenger/summary";
        $payment['cancel_url'] = "passenger/billing";
        $payment['notify_url'] = "passenger/summary";
        $payment['order_id'] = $order_id;
        $payment['items'] = $data['reservation_id'];
        $payment['amount'] = number_format($amount, 2, '.', '');
        $payment['currency'] = "LKR";
        $payment['first_name'] = $data['passenger_data']['reservation_passenger_first_name'][0];
        $payment['last_name'] = $data['passenger_data']['reservation_passenger_last_name'][0];
        $payment['email'] = $data['passenger_data']['reservation_passenger_email'][0];
        $payment['phone'] = $data['passenger_data']['reservation_passenger_phone_number'][0];

        $payment['hash'] = strtoupper(
            md5(
                $payment['merchant_id'] .
                    $payment['order_id'] .
                    number_format($payment['amount'], 2, '.', '') .
                    "LKR" .
                    strtoupper(md5("OTk2MjQ5NTM4MTA1ODAwMDE4NjM5MjU5NjEwMTkyMDcwODQyMzc0"))
            )
        );

        return $payment;
        // echo "heeejj";


    }

    public static function setError($data)
    {
        $_SESSION['errors'] = $data;
    }

    public static function getError()
    {
        if (isset($_SESSION['errors'])) {
            $errors = $_SESSION['errors'];
            unset($_SESSION['errors']);
            return $errors;
        }
        return false;
    }

    public static function getTicketId()
    {
        $timestamp = date('YmdHis');
        $randomValue = rand(1000, 9999); // Generate a random 4-digit number
        $ticketId = $timestamp . "-" . $randomValue;

        return $ticketId;
    }

    public static function getTempReservationId()
    {
        $timestamp = date('YmdHis');
        $randomValue = rand(1000, 9999); // Generate a random 4-digit number
        $tempId = "TMP". $timestamp . "-" . $randomValue;

        return $tempId;
    }
}

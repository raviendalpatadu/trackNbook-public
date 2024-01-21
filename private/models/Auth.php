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
        return 'unknown';
    }


    // handle payment
    public static function payment($data)
    {       
        $payment['merchant_id'] = "1225507";
        $payment['return_url'] = "passenger/summary";
        $payment['cancel_url'] = "passenger/billing";
        $payment['notify_url'] = "passenger/summary";
        $payment['order_id'] = "142";
        $payment['items'] = "Door bell wireles";
        $payment['amount'] = number_format($data['price'], 2, '.', '');
        $payment['currency'] = "LKR";
        $payment['first_name'] = "Saman";
        $payment['last_name'] = "Perera";
        $payment['email'] = "";
        $payment['phone'] = "";
        $payment['address'] = "";
        $payment['city'] = "";
        $payment['country'] = "";
        $payment['delivery_address'] = "";
        $payment['delivery_city'] = "";
        $payment['delivery_country'] = "";
        $payment['custom_1'] = "";
        $payment['custom_2'] = "";

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

}

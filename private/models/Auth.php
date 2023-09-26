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
            return $_SESSION['USER']->first_name;
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

    // public static function switch_school($id)
    // {
    //     if (isset($_SESSION['USER']) && $_SESSION['USER']->rank == 'super_admin') {

    //         $user = new User();
    //         $school = new School();
            
    //         if ($row = $school->where('school_id', $id)) {
    //             $row = $row[0];
    //             $arr['school_id'] = $row->school_id;
    //             $data = $user->update($_SESSION['USER']->user_id, $arr);
    //             if (isset($data)) {
    //                 $_SESSION['USER']->school_id = $row->school_id;
    //                 $_SESSION['USER']->school_name = $row->school_name;
    //             }
    //         }
    //         return true;
    //     }
    //     return false;
    // }
}

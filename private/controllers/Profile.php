<?php

/**
 * profile controller
 */

class Profile extends Controller
{
    function index($id = '')
    {
        $user = new Users();
        $errors = array();
        
        // if (isset($_POST['update'])) {
        //     // var_dump($_POST);
        //     $update = array("user_first_name"=> $_POST['user_first_name']);
        //     $user->update($id, $update, 'user_id');
        // }
         
        $this->view('profile');
    }

   

}

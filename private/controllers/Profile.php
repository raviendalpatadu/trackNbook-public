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
        
        if (isset($_POST['update'])) {
            try {
                $result = $user->updateUserProfile($_POST['user_id'], $_POST);
                
                if ($result != 1 && array_key_exists('errors', $result)) {
                    $data['errors'] = $result['errors'];
                }
                echo "<pre>";
                print_r($result);
                echo "</pre>";
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
         
        $this->view('profile');
    }

   

}

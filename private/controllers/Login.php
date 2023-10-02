<?php

/**
 * home controller
 */

class Login extends Controller
{
    function index($id = '')
    {
        $errors = array();

        // if (count($_POST) > 0) {
        //     $user = new User();

        //     if ($row = $user->where('email',$_POST['username'])) {
                
        //         $row = $row[0];
        //         if (password_verify($_POST['password'], $row->password)) {     
        //             Auth :: authenticate($row);
        //             $this->redirect('home');
        //         }
        //     }             
        //     $errors['email'] = 'invalid Username or Password';
        // }

        $this->view('login', array(
            'errors'=>$errors,)
        );
    }
}
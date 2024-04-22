<?php

/**
 * home controller
 */

class Logout extends Controller
{
    function index($id = '')
    {
         
        
        if (Auth::getUser_type() == 'train_driver') {
            unset($_SESSION['train_driver']);
        }
        Auth::logout();
        
        $this->redirect('login');
    }

    
}

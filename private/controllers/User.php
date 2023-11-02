<?php

/**
 * home controller
 */

class user extends Controller
{
    function index($id = '')
    {

        $this->view('home');
    }

    function add($id = '')
    {
        $this->view('add.user.admin');
    }

    // function details($id = '')
    // {
    //     $passenger = new Passengers();
    //     $data = array();
    //     $data = $passenger->getPassengers();
    //     $this->view('passenger.details', $data);
    // }

    function register($id = '')
    {
        $data = array();
        $user = new users();

        if (isset($_POST['user_title'])) {
            $data = $user->addUser();
            // echo json_encode($data);
            if (!array_key_exists('errors', $data)) {
                $this->redirect('login');
            } else {
                $errors['user_first_name'] = (array_key_exists('user_first_name', $data['errors'])) ? $data['errors']['user_first_name'] : '';
                $errors['user_last_name'] = (array_key_exists('user_last_name', $data['errors'])) ? $data['errors']['user_last_name'] : '';
                $errors['user_phone_number'] = (array_key_exists('user_phone_number', $data['errors'])) ? $data['errors']['user_phone_number'] : '';
                $errors['login_username'] = (array_key_exists('login_username', $data['errors'])) ? $data['errors']['login_username'] : '';
                $errors['login_password'] = (array_key_exists('login_password', $data['errors'])) ? $data['errors']['login_password'] : '';
            }
        }


        $this->view('add.user.admin', $data);
    }

    function search($id = '')
    {
        $this->view('view.user.admin');
    }
}

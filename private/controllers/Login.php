<?php

/**
 * home controller
 */

class Login extends Controller
{
    function index($id = '')
    {
        $errors = array();


        $user = new Users();
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $data = $user->login();

            if (!array_key_exists('error', $data)) {

                Auth::authenticate($data[0]);

                $user_id = $data[0]->user_id;
                $user_type = Auth::getUser_Type($user_id);
                // redirect to dashboard passenger
                if (strtolower($user_type) == "passenger") {
                    $this->redirect('home');
                }
                
               
                
            }
            else{
                $errors['username'] = (array_key_exists('invalid_uname',$data['error'])) ? $data['error']['invalid_uname'] : '';
                $errors['password'] = (array_key_exists('invalid_password',$data['error'])) ? $data['error']['invalid_password'] : '';
            }
        }


        //$errors['email'] = 'invalid Username or Password';
        //}

        $this->view(
            'login',
            array(
                'errors' => $errors,
            )
        );
    }

    function staff($id = '')
    {
        $errors = array();


        $user = new Users();
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $data = $user->login();

            if (!array_key_exists('error', $data)) {

                Auth::authenticate($data[0]);

                $user_id = $data[0]->user_id;

                $user_type = Auth::getUser_Type($user_id);
                // redirect to dashboard admin
                if (strtolower($user_type) == "admin") {
                    $this->redirect('dashboard/admin');
                }
               
                //rederect to dashboard staff general
                elseif (strtolower($user_type) == "staff_general") {
                    $this->redirect('dashboard/staff_general');
                }
                //rederect to dashboard staff ticketing
                elseif (strtolower($user_type) == "staff_ticketing") {
                    $this->redirect('dashboard/staff_ticketing');
                }
                //rederect to dashboard train driver
                elseif (strtolower($user_type) == "train_driver") {
                    $this->redirect('dashboard/train_driver');
                }
                //rederect to dashboard station master
                elseif (strtolower($user_type) == "station_master") {
                    $this->redirect('dashboard/station_master');

                } elseif (strtolower($user_type) == "ticket_checker") {
                    $this->redirect('ticketchecker/option');
                }
            } else {
                $errors['username'] = (array_key_exists('invalid_uname', $data['error'])) ? $data['error']['invalid_uname'] : '';
                $errors['password'] = (array_key_exists('invalid_password', $data['error'])) ? $data['error']['invalid_password'] : '';
            }
        }


        //$errors['email'] = 'invalid Username or Password';
        //}

        $this->view(
            'staff.Login',
            array(
                'errors' => $errors,
            )
        );

    }
}
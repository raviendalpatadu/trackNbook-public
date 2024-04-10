<?php

/**
 * home controller
 */

class User extends Controller
{
    function index($id = '')
    {

        $this->view('home');
    }

    // function add($id = '')
    // {
    //     $this->view('add.user.admin');
    // }

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
        $user = new Users();

        if (isset($_POST['user_title'])) {
            $data = $user->addUserValidateAdmin();

            if (!array_key_exists('errors', $data)) {

                try {
                    $user = new Users();
                    $user_id =  $user->insert(array(
                        'user_title' => $_POST['user_title'],
                        'user_first_name' => $_POST['user_first_name'],
                        'user_last_name' => $_POST['user_last_name'],
                        'user_phone_number' => $_POST['user_phone_number'],
                        'user_type' => $_POST["user_type"],
                        'user_gender' => $_POST['user_gender'],
                        'user_email' => $_POST['user_email'],
                        'user_nic' => $_POST['user_nic']
                    ));

                    $login = new Logins();
                    $login->insert(array(
                        'login_username' => $_POST['login_username'],
                        'login_password' => md5($_POST['login_password']),
                        'user_id' => $user_id
                    ));


                    // check if files are set in $_FIlES
                    
                    $image = new Images();

                    if (isset($_FILES['user_image']) && $_FILES['user_image']['error'] == 0) {
                        $image_file = $this->setPrivateImage('userImg', $_FILES['user_image']);

                        $image->insert(array(
                            'user_id' => $user_id,
                            'image_name' => $image_file['image_name'],
                            'image_path' => $image_file['image_path'],
                            'image_type' => $image_file['image_type']
                        ));
                    } else {
                        $image->insert(array(
                            'user_id' => $user_id,
                            'image_name' => 'default.jpg',
                            'image_path' => 'userImg/default.jpg',
                            'image_type' => 'image/jpg'
                        ));
                    }


                } catch (PDOException $e) {
                    die($e->getMessage());
                }

                // $this->redirect('services/manage');
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
        $this->view('search.test.user.admin');
    }

    public function getUserImage($folder, $file)
    {
        $this->getPrivateImage($folder, $file);
    }
}

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
                $result = $user->updateUserProfileValidate($_POST['user_id'], $_POST);

                if ($result != 1 && array_key_exists('errors', $result)) {
                    $data['errors'] = $result['errors'];
                } else {
                    $data = $_POST;
                    try {

                        $result = $user->update($data['user_id'], array(
                            'user_title' => $data['user_title'],
                            'user_first_name' => $data['user_first_name'],
                            'user_last_name' => $data['user_last_name'],
                            'user_phone_number' => $data['user_phone_number'],
                            'user_email' => $data['user_email'],
                            'user_nic' => $data['user_nic'],
                            'user_id' => $data['user_id']
                        ), 'user_id');


                        $_SESSION['USER']->user_title = $data['user_title'];
                        $_SESSION['USER']->user_first_name = $data['user_first_name'];
                        $_SESSION['USER']->user_last_name = $data['user_last_name'];
                        $_SESSION['USER']->user_phone_number = $data['user_phone_number'];
                        $_SESSION['USER']->user_email = $data['user_email'];
                        $_SESSION['USER']->user_nic = $data['user_nic'];


                        if (isset($_FILES['user_image']) && !empty($_FILES['user_image']['name'])) {


                            $image = new Images();
                            
                            
                            $image_file = $this->setPrivateImage('userImg', $_FILES['user_image'], $user->getUserImage($data['user_id']));

                            $image->update($data['user_id'], array(
                                'user_id' => $data['user_id'],
                                'image_name' => $image_file['image_name'],
                                'image_path' => $image_file['image_path'],
                                'image_type' => $image_file['image_type']
                            ), 'user_id');

                            $_SESSION['USER']->image_path = $image_file['image_path'];
                        }
                        // catch any exception
                    } catch (PDOException $e) {
                        die($e);
                    }
                }
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        $this->view('profile');
    }
}

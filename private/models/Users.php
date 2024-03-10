<?php

class Users extends Model
{

    protected $table = 'tbl_user';

    public function __construct()
    {
        parent::__construct();
    }


    public function login()
    {
        $errors = array();

        //check if username is exists
        $query = "select * from tbl_login where login_username = :username";
        $data = $this->query($query, array(
            'username' => $_POST['username']
        ));

        if ($data > 0) {
            //check if username and password is correct
            $query = "SELECT u.user_id, u.user_title, u.user_first_name , u.user_last_name, u.user_phone_number,u.user_type, u.user_gender, u.user_email, u.user_nic FROM tbl_user as u JOIN tbl_login ON u.user_id = tbl_login.user_id WHERE login_username = :username and login_password = :password";
            $data_pass = $this->query($query, array(
                'username' => $_POST['username'],
                'password' => md5($_POST['password'])
            ));



            if ($data_pass > 0) {
                return $data_pass;
            } elseif (!$data_pass) {
                $errors['error']['invalid_password'] = 'Invalid Password';
            }
        } elseif (!$data) {
            $errors['error']['invalid_uname'] = 'Invalid Username';
        }
        return $errors;
    }

    public function gUserType($userid)
    {
        $query = "select * from tbl_user where user_id = :userid";
        $data = $this->query($query, array(
            'userid' => $userid
        ));

        if ($data > 0) {
            return $data[0]->user_type;
        } elseif (!$data) {
            $errors['error'] = 'invalid userid';
            return $errors;
        }
    }

    public function addUser()
    {
        $errors = array();


        //check if username is exists in post
        if (empty($_POST['login_username'])) {
            $errors['errors']['login_username'] = 'Username is required';
        }

        //check username allready exists
        $query = "select * from tbl_login where login_username = :username";
        $data = $this->query($query, array(
            'username' => $_POST['login_username']
        ));
        if ($data > 0) {
            $errors['errors']['login_username'] = 'Username allready exists';
        }

        //check if password is exists in post
        if (empty($_POST['login_password'])) {
            $errors['errors']['login_password'] = 'Password is required';
        }

        //check if confirm password is exists 
        if (empty($_POST['login_confirm_password'])) {
            $errors['errors']['login_confirm_password'] = 'Confirm Password is required';
        }

        //check if password and confirm password is match
        if ($_POST['login_password'] != $_POST['login_confirm_password']) {
            $errors['errors']['login_confirm_password'] = 'Password and Confirm Password is not match';
        }


        //check if first name is exists in post
        if (empty($_POST['user_first_name'])) {
            $errors['errors']['user_first_name'] = 'First Name is required';
        }

        //check if last name is exists in post
        if (empty($_POST['user_last_name'])) {
            $errors['errors']['user_last_name'] = 'Last Name is required';
        }

        //check if phone number is exists in post
        if (empty($_POST['user_phone_number'])) {
            $errors['errors']['user_phone_number'] = 'Phone Number is required';
        }
        //check phone number is 10 digits
        // if (!preg_match("/^[0-9]{10}$/", $_POST['user_phone_number'])) {
        //     $errors['errors']['user_phone_number'] = 'Please enter a valid Phone Number';
        // }

        //check nic is exists in post
        if (empty($_POST['user_nic'])) {
            $errors['errors']['user_nic'] = 'NIC is required';
        }

        //check if email is exists in post
        if (empty($_POST['user_email'])) {
            $errors['errors']['user_email'] = 'Email is required';
        }

        //check if email is valid
        if (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
            $errors['errors']['user_email'] = 'Invalid Email';
        }

        // check gender is exists in post it is a radio box
        if (empty($_POST['user_gender'])) {
            $errors['errors']['user_gender'] = 'Gender is required';
        }

        if (empty($_POST['user_type'])) {
            $errors['errors']['user_type'] = 'Gender is required';
        }






        if (!array_key_exists('errors', $errors)) {

            try {
                $con = $this->connect();
                $con->beginTransaction();

                //insert query to add passenger account
                $query = "Insert INTO tbl_user (user_title, user_first_name,user_last_name,user_phone_number,user_type, user_gender, user_email, user_nic) 
                VALUES (:user_title, :user_first_name,:user_last_name,:user_phone_number, :user_type, :user_gender, :user_email, :user_nic)";

                $stm = $con->prepare($query);
                $stm->execute(array(
                    'user_title' => $_POST['user_title'],
                    'user_first_name' => $_POST['user_first_name'],
                    'user_last_name' => $_POST['user_last_name'],
                    'user_phone_number' => $_POST['user_phone_number'],
                    'user_type' => $_POST["user_type"],
                    'user_gender' => $_POST['user_gender'],
                    'user_email' => $_POST['user_email'],
                    'user_nic' => $_POST['user_nic']
                ));
                $user_id = $con->lastInsertId();
                $query2 = "Insert INTO tbl_login (login_username,login_password, user_id) VALUES (:login_username, :login_password, :user_id)";

                $stm2 = $con->prepare($query2);
                $stm2->execute(array(
                    'login_username' => $_POST['login_username'],
                    'login_password' => md5($_POST['login_password']),
                    'user_id' => $user_id
                ));
            } catch (PDOException $e) {
                die($e->getMessage());
            }


            $data = array();
            $con->commit();
            $con = null;


            if ($data > 0) {
                return $data;
            }
        }
        return $errors;
    }

    //update user
    public function updateUser($id, $data)
    {
        $errors = array();

        //check if title exists in post
        if (empty($data['user_title'])) {
            $errors['errors']['user_title'] = 'Title is required';
        }

        //check if first name is exists in post
        if (empty($data['user_first_name'])) {
            $errors['errors']['user_first_name'] = 'First Name is required';
        }

        //check if last name is exists in post
        if (empty($data['user_last_name'])) {
            $errors['errors']['user_last_name'] = 'Last Name is required';
        }

        //check if phone number is exists in post
        if (empty($data['user_phone_number'])) {
            $errors['errors']['user_phone_number'] = 'Phone Number is required';
        }

        // 10 number validation
        if (strlen($data['user_phone_number']) != 10) {
            $errors['errors']['user_phone_number'] = 'Phone Number is invalid';
        }

        //check nic is exists in post
        if (empty($data['user_nic'])) {
            $errors['errors']['user_nic'] = 'NIC is required';
        } else {
            // 10 number validation o rGroup13 - SRS-TrackNBookm in it
            if (strlen($data['user_nic']) != 12) {
                if (strlen($data['user_nic']) == 10) {
                    $last_char = strtolower(substr($data['user_nic'], -1));
                    if ($last_char != 'v') {
                        $errors['errors']['user_nic'] = 'NIC is invalid last char is not V or v';
                    }
                } else {
                    $errors['errors']['user_nic'] = 'NIC is invalid';
                }
            }
        }



        //check if email is exists in post
        if (empty($data['user_email'])) {
            $errors['errors']['user_email'] = 'Email is required';
        }

        //check if email is valid
        if (!filter_var($data['user_email'], FILTER_VALIDATE_EMAIL)) {
            $errors['errors']['user_email'] = 'Invalid Email';
        }

        // check gender
        if (empty($data['user_gender'])) {
            $errors['errors']['user_gender'] = 'Gender Required';
        }

        // check user type
        if (empty($data['user_type'])) {
            $errors['errors']['user_type'] = 'User Type Required';
        }


        if (!array_key_exists('errors', $errors)) {
            try {
                $con = $this->connect();

                $sql = "UPDATE tbl_user SET user_title = :user_title, user_first_name = :user_first_name, user_last_name = :user_last_name, user_phone_number = :user_phone_number, user_type = :user_type, user_gender = :user_gender, user_email = :user_email, user_nic = :user_nic WHERE user_id = :user_id;";
                $stmt = $con->prepare($sql);
                $result = $stmt->execute(array(
                    'user_title' => $data['user_title'],
                    'user_first_name' => $data['user_first_name'],
                    'user_last_name' => $data['user_last_name'],
                    'user_phone_number' => $data['user_phone_number'],
                    'user_type' => $data['user_type'],
                    'user_gender' => $data['user_gender'],
                    'user_email' => $data['user_email'],
                    'user_nic' => $data['user_nic'],
                    'user_id' => $data['user_id']
                ));

                if ($result == true) {
                    return $result;
                }
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
        return $errors;
    }

    public function updateUserProfile($id, $data)
    {
        $errors = array();

        //check if title exists in post
        if (empty($data['user_title'])) {
            $errors['errors']['user_title'] = 'Title is required';
        }

        //check if first name is exists in post
        if (empty($data['user_first_name'])) {
            $errors['errors']['user_first_name'] = 'First Name is required';
        }

        //check if last name is exists in post
        if (empty($data['user_last_name'])) {
            $errors['errors']['user_last_name'] = 'Last Name is required';
        }

        //check if phone number is exists in post
        if (empty($data['user_phone_number'])) {
            $errors['errors']['user_phone_number'] = 'Phone Number is required';
        }

        // 10 number validation
        if (strlen($data['user_phone_number']) != 10) {
            $errors['errors']['user_phone_number'] = 'Phone Number is invalid';
        }

        //check nic is exists in post
        if (empty($data['user_nic'])) {
            $errors['errors']['user_nic'] = 'NIC is required';
        } else {
            // 10 number validation o rGroup13 - SRS-TrackNBookm in it
            if (strlen($data['user_nic']) != 12) {
                if (strlen($data['user_nic']) == 10) {
                    $last_char = strtolower(substr($data['user_nic'], -1));
                    if ($last_char != 'v') {
                        $errors['errors']['user_nic'] = 'NIC is invalid last char is not V or v';
                    }
                } else {
                    $errors['errors']['user_nic'] = 'NIC is invalid';
                }
            }
        }



        //check if email is exists in post
        if (empty($data['user_email'])) {
            $errors['errors']['user_email'] = 'Email is required';
        }

        //check if email is valid
        if (!filter_var($data['user_email'], FILTER_VALIDATE_EMAIL)) {
            $errors['errors']['user_email'] = 'Invalid Email';
        }


        if (!array_key_exists('errors', $errors)) {
            try {
                $con = $this->connect();

                $sql = "UPDATE tbl_user SET user_title = :user_title, user_first_name = :user_first_name, user_last_name = :user_last_name, user_phone_number = :user_phone_number, user_email = :user_email, user_nic = :user_nic WHERE user_id = :user_id;";
                $stmt = $con->prepare($sql);
                $result = $stmt->execute(array(
                    'user_title' => $data['user_title'],
                    'user_first_name' => $data['user_first_name'],
                    'user_last_name' => $data['user_last_name'],
                    'user_phone_number' => $data['user_phone_number'],
                    'user_email' => $data['user_email'],
                    'user_nic' => $data['user_nic'],
                    'user_id' => $data['user_id']
                ));

                if ($result == true) {
                    // $_SESSION['USER'] = $data;
                    return $result;
                }
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
        return $errors;
    }

    public function getUsers($column, $value)
    {

        try {
            $result = $this->where($column, $value);
            //sort an array in assending order
            if ($result > 0) {
                return $result;
            } else {
                return 0;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }
}

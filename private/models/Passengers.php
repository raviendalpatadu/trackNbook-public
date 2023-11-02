<?php
class Passengers extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getPassengers()
    {
        $result = $this->findAll();
        return $result;
    }

    public function addPassenger()
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
        if(empty($_POST['user_gender'])){
            $errors['errors']['user_gender'] = 'Gender is required';
        }







        if (!array_key_exists('errors', $errors)) {
            
            try { 
                $con = $this->connect();
                $con->beginTransaction() ;

                //insert query to add passenger account
                $query = "Insert INTO tbl_user (user_title, user_first_name,user_last_name,user_phone_number,user_type, user_gender) 
                VALUES (:user_title, :user_first_name,:user_last_name,:user_phone_number, :user_type, :user_gender)";

                $stm = $con->prepare($query);
                $stm->execute(array(
                    'user_title' => $_POST['user_title'],
                    'user_first_name' => $_POST['user_first_name'],
                    'user_last_name' => $_POST['user_last_name'],
                    'user_phone_number' => $_POST['user_phone_number'],
                    'user_type' => "passenger",
                    'user_gender' => $_POST['user_gender']
                ));
                $user_id = $con->lastInsertId();
                $query2 = "Insert INTO tbl_login (login_username,login_password, user_id) VALUES (:login_username, :login_password, :user_id)";

                $stm2 = $con->prepare($query2);
                $stm2->execute(array(
                    'login_username' => $_POST['login_username'],
                    'login_password' => md5($_POST['login_password']),
                    'user_id' => $user_id
                ));


                $stm3 = "INSERT INTO `tbl_passengers` (passenger_id, passenger_email, passenger_nic) VALUES (:user_id, :user_email, :user_nic)";
                $stm3 = $con->prepare($stm3);
                $stm3->execute(array(
                    'user_id' => $user_id,
                    'user_email' => $_POST['user_email'],
                    'user_nic' => $_POST['user_nic']
                ));

            } catch (PDOException $e) {
                echo $e->getMessage();
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
}

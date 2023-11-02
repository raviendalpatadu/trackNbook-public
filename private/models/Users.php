<?php

class Users extends Model{

    protected $table = 'tbl_user';
    
    public function __construct(){
        parent::__construct();
    }


    public function login(){
        $errors = array();

        //check if username is exists
        $query = "select * from tbl_login where login_username = :username";
        $data = $this->query($query,array(
            'username'=>$_POST['username']
        ));

        if($data > 0){
            //check if username and password is correct
            $query = "SELECT u.user_id, u.user_title, u.user_first_name , u.user_last_name, u.user_phone_number,u.user_type, u.user_gender, u.user_email, u.user_nic FROM tbl_user as u JOIN tbl_login ON u.user_id = tbl_login.user_id WHERE login_username = :username and login_password = :password";
            $data_pass = $this->query($query,array(
                'username'=>$_POST['username'],
                'password'=>md5($_POST['password'])
            ));

            
    
            if($data_pass > 0){
                return $data_pass;
            }
            elseif (!$data_pass) {
                $errors['error']['invalid_password'] = 'Invalid Password';
            }
        } elseif (!$data) {
            $errors['error']['invalid_uname'] = 'Invalid Username';
        }
        return $errors;

    }

    public function gUserType($userid){
        $query = "select * from tbl_user where user_id = :userid";
        $data = $this->query($query,array(
            'userid'=>$userid
        ));
        
        if($data > 0){
            return $data[0]->user_type;
        }
        elseif (!$data) {
            $errors['error'] = 'invalid userid';
            return $errors;
        }
    }
}

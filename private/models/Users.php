<?php

class Users extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function getUsers(){
        $result = $this->findAll();
        return $result;
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
            $query = "select * from tbl_login where login_username = :username and login_password = :password";
            $data_pass = $this->query($query,array(
                'username'=>$_POST['username'],
                'password'=>$_POST['password']
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

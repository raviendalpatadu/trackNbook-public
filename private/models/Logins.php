<?php

class Logins extends Model{
    protected $table = 'tbl_login';
    protected $allowed_columns = ['login_username', 'login_password', 'user_id'];

    public function __construct(){
        parent::__construct();
    }
    
}

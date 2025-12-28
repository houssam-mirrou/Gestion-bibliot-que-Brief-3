<?php

class Session
{
    public function __construct()
    {
        session_start();
    }
    public function session_die()
    {
        $_SESSION = [];
        unset($_SESSION);
        session_destroy();
    }
    public function set_user($user,$role,$id){
        $_SESSION['user']=$user;
        $_SESSION['role']=$role;
        $_SESSION['user_id'] = $id;

    }
}

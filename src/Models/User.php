<?php

abstract class User
{
    protected string $first_name;
    protected string $last_name;
    protected string $email;
    protected string $phone_number;

    public function __construct($first_name, $last_name, $email, $phone_number)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->phone_number = $phone_number;
    }

    public function get_first_name(){
        return $this->first_name;
    }
    public function get_last_name(){
        return $this->last_name;
    }
    public function get_email(){
        return $this->email;
    }
    public function get_phone_number(){
        return $this->phone_number;
    }
}

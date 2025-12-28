<?php


class Admin extends User {
    private $role;
    public function __construct($first_name, $last_name, $email, $phone_number)
    {
        parent::__construct($first_name, $last_name, $email, $phone_number);
        $this->role= 'admin';
    } 
}
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

    protected function check_role($data)
    {
        $query = 'SELECT role from users where email = :email';
        $result = $data->query($query, [':email' => $this->email]);
        if ($result == []) {
            return false;
        }
        return $result[0];
    }

    public function __destruct()
    {
        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
        $this->phone_number = '';
    }
}

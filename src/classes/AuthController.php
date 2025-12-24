<?php

class AuthController
{
    public static function sign_up($data, $email, $password, $first_name, $last_name, $phone_number, $reconfirm_password)
    {
        $errors = static::fields_verifications($data, $email, $password, $first_name, $last_name, $phone_number, $reconfirm_password);
        if ($errors === true) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $query =
                'INSERT into users (first_name,last_name,email,phone_number,password) 
                values (:first_name,:last_name,:email,:phone_number,:password)';
            $params = [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'phone_number' => $phone_number,
                'password' => $hashed_password
            ];
            $data->query($query, $params);
        }
        return $errors;
    }
    private static function sign_out() {
        session_destroy();
        header('Location: /');
        exit();
    }
    public static function sign_in($data, $email, $password)
    {
        $errors = [];

        if (!static::validate_email($email)) {
            $errors['email'] = 'This email is invalid';
        }

        if (!static::email_available($email, $data)) {
            $errors['email'] = 'This email already been taken';
        }

        if (!static::validate_password($password, $data)) {
            $errors['email'] = 'The password must be valid';
        }
        if (empty($errors)) {
            $query = 'SELECT password from users where email = :email;';
            $params = [
                'email' => $email
            ];
            $result = $data->query($query, $params);
            if (password_verify($password, $result[0]['mot_de_pass'])) {
                return true;
            } else {
                $errors['password'] = 'The password is incorrect';
            }
        }
        return $errors;
    }

    public static function fields_verifications($data, $email, $password, $first_name, $last_name, $phone_number, $reconfirm_password)
    {
        $errors = [];
        if (!static::validate_email($email)) {
            $errors['email'] = 'You should give a valid email';
        }
        if (!static::validate_name($first_name)) {
            $errors['first_name'] = 'You should give a valid first name must be 2+ characters';
        }
        if (!static::validate_name($last_name)) {
            $errors['last_name'] = 'You should give a valid valid last name must be 2+ characters';
        }
        if (!static::validate_phone($phone_number)) {
            $errors['phone_number'] = 'You should give a valid number';
        }
        if (!static::validate_password($password, $reconfirm_password)) {
            $errors['password'] = 'You should give a valid password';
        }
        if (!static::email_available($email, $data)) {
            $errors['email'] = 'Email already token by someone';
        }
        if (!empty($errors)) {
            return $errors;
        }
        return true;
    }
    private function validate_email($email)
    {
        $email=trim($email);
        if ($email === null) {
            return false;
        }
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    private function validate_name($name)
    {
        $name=trim($name);
        if ($name === null) {
            return false;
        }
        $regex = "/^[A-Za-z ]{3,}$/";
        if (preg_match($regex, $name)) {
            return true;
        }
        return false;
    }
    private function validate_phone($phone_number)
    {
        $phone_number=trim($phone_number);
        if ($phone_number == null) {
            return false;
        }
        $regex = "/^\+?[0-9]{8,15}$/";

        if (preg_match($regex, $phone_number)) {
            return true;
        }
        return false;
    }
    private function validate_password($password, $reconfirm_password)
    {
        $password = trim($password);
        $reconfirm_password = trim($reconfirm_password);
        if ($password == null) {
            return false;
        }
        if ($password != $reconfirm_password) {
            return false;
        }

        $regex = "/^[A-Za-z0-9#@&!%$]{8,}$/";

        if (preg_match($regex, $password)) {
            return true;
        }
        return false;
    }
    private function email_available($email, $data)
    {
        $email = trim($email);
        $query = 'SELECT email from users where email = :email;';
        $params = [
            'email' => $email
        ];
        $result = $data->query($query, $params);
        if ($result == []) {
            return true;
        }
        return false;
    }

    private function get_user_id($data, $email)
    {
        $email=trim($email);
        $query = 'SELECT id from users where email = :email';
        $params = [
            'email' => $email
        ];
        $result = $data->query($query, $params);
        if ($result == []) {
            return false;
        }
        return $result[0]['id'];
    }
}

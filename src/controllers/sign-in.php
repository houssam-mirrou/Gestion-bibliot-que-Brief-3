<?php

$temp_user = [];

if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $temp_user['email'] = $email;
    $temp_user['password'] = $password;
    $errors = AuthController::sign_in($data,$email,$password);
    if($errors===true){
        $user = AuthController::get_current_user($data,$email);
        $role = AuthController::get_role($data,$email);
        $session_user;
        if($role == 'admin'){
            $session_user = new Admin($user['firstName'],$user['lastName'],$user['email'],$user['phone_number']);
        }
        else {
            $session_user = new Reader($user['firstName'],$user['lastName'],$user['email'],$user['phone_number']);
        }
        $session->set_user($session_user,$role,$user['id']);
        header('Location: /');
        exit();
    }
}

require __DIR__ . '/../views/sign-in.view.php';

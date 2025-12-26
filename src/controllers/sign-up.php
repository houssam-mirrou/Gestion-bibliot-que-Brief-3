<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];
    $reconfirm_password = $_POST['confirm_password'];
    $reader = new Reader($first_name,$last_name,$email,$phone_number);
    $errors = AuthController::sign_up($data,$email,$password,$first_name,$last_name,$phone_number,$reconfirm_password);
    if($errors === true){
        unset($reader);
        header('Location: /sign-in');
        exit();
    }
}


require __DIR__ . '/../views/sign-up.view.php';

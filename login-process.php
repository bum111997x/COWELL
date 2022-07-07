<?php
include "include/functions.php";

if($_POST){
    $errors = [];
    if($_POST['email']){
        if(false == filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $errors['email'] = $_POST['email'];
            $errors['email'] .= ' is not valid email address';
        }
    }else{
        $errors['email'] = "Email is required";
    }

    if(0 === strlen($_POST['password'])){
        $errors['password'] = 'Password is required';
    }

    if($errors){
        $_SESSION['errors'] = $errors;
        $_SESSION['old'] = $_POST;
        redirect('sign-in.php');
    }

    $_SESSION['user'] = 'admin';
}else{
    redirect('sign-in.php');
};
?>
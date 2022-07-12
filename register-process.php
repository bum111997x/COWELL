<?php
include "include/functions.php";

if($_POST){
    $errors = [];
    if($_POST['firstName']){
        if(preg_match("/^([a-zA-Z' ]+)$/",$_POST['firstName']) == 0){
            $errors['firstName'] = $_POST['firstName'];
            $errors['firstName'] .= "Chỉ được có chữ";
        }
    }else{
        $errors['firstName'] = "First Name is required";
    }

    if($_POST['surName']){
        if(preg_match("/^([a-zA-Z' ]+)$/",$_POST['surName']) == 0){
            $errors['surName'] = $_POST['surName'];
            $errors['surName'] .= "Chỉ được có chữ";
        }
    }else{
        $errors['surName'] = "SurName is required";
    }

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

    if($_POST['date']){
        if($_POST['date'] <1 || $_POST['date'] >31){
            $errors['date'] = "Date around 1-31";
        }
    }else{
        $errors['date'] = 'Date is required';
    }

    if($_POST['month']){
        if($_POST['month'] <1 || $_POST['month'] >12){
            $errors['month'] = "Month around 1-12";
        }
    }else{
        $errors['month'] = 'Month is required';
    }

    if($_POST['year']){
        $date = getdate();

        if($_POST['year'] > $date['year']){
            $errors['year'] = "Year must lower than " + $date['year'];
        }
    }else{
        $errors['year'] = 'Year is required';
    }

    if(!$_POST['gender']){
        $errors['gender'] = 'Gender is required';
    }

    if($errors){
        $_SESSION['errors'] = $errors;
        $_SESSION['old'] = $_POST;
        redirect('register.php');
    }
}else{
    redirect('sign-in.php');
};













?>
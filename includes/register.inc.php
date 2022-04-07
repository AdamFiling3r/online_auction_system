<?php

require_once 'connect.php';
require_once 'function.inc.php';

if(isset($_POST["submit"])){
    if(sizeof($_SESSION['errors']) > 0){
        $_SESSION["errors"] = array();
      }
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $rep_password = $_POST['rep_password'];


    if(emptyInputRegister($first_name, $last_name, $email, $username, $password, $rep_password) !== false){
        array_push($_SESSION['errors'], 'emptyInputRegister');
        header("location: ". $_SERVER["HTTP_REFERER"]);
        exit();
    }
    if(invalidUsername($username) !== false){
        array_push($_SESSION['errors'], 'invalidUsernameRegister');
        header("location: ". $_SERVER["HTTP_REFERER"]);
        exit();
    }
    if(invalidEmail($email) !== false){
        array_push($_SESSION['errors'], 'invalidEmailRegister');
        header("location: ". $_SERVER["HTTP_REFERER"]);
        exit();
    }
    if(passNotMach($password, $rep_password) !== false){
        array_push($_SESSION['errors'], 'passNotMatchRegister');
        header("location: ". $_SERVER["HTTP_REFERER"]);
        exit();
    }
    if(userExists($username, $email, $conn) !== false){
        array_push($_SESSION['errors'], 'userExistsRegister');
        header("location: ". $_SERVER["HTTP_REFERER"]);
        exit();
    }

    createUser($conn, $username, $email, $first_name, $last_name, $password);
    header("location: ../login.php");
    exit();
}else{
    header("location: ../register.php");
    exit();
}
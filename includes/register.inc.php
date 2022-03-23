<?php


if(isset($_POST["submit"])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $rep_password = $_POST['rep_password'];

    require_once 'connect.php';
    require_once 'function.inc.php';

    if(emptyInputRegister($first_name, $last_name, $email, $username, $password, $rep_password) !== false){
        header("location: ../register.php?error=emptyinput");
        exit();
    }
    if(invalidUsername($username) !== false){
        header("location: ../register.php?error=invalidusername");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("location: ../register.php?error=invalidemail");
        exit();
    }
    if(passNotMach($password, $rep_password) !== false){
        header("location: ../register.php?error=passnotmach");
        exit();
    }
    if(userExists($username, $email, $conn) !== false){
        header("location: ../register.php?error=userexists");
        exit();
    }

    createUser($conn, $username, $email, $first_name, $last_name, $password);
    
    
}else{
    header("location: ../register.php");
    exit();
}
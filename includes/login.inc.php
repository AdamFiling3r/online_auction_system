<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once 'connect.php';
    require_once 'function.inc.php';

    if(emptyInputLogin($username, $password) !== false){
      header("location ../login.php?error=emptylogin");
      exit();
    }
    
    loginUser($conn, $username, $password);

}else{
  header("location: ../login.php");
  exit();
}


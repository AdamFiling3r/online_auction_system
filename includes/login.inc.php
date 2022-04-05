<?php

if(isset($_POST['submit'])){
    foreach ($_SESSION["errors"] as $key => $_SESSION["errors"]){
        unset($_SESSION["errors"][$key]);
    }
    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once 'connect.php';
    require_once 'function.inc.php';

    if(emptyInputLogin($username, $password) == true){
      array_push($_SESSION['errors'], 'emptyInputLogin');
      header("location: ". $_SERVER["HTTP_REFERER"]);
      exit();
    }else{
      loginUser($conn, $username, $password);
    }


}else{
  header("location: ../login.php");
  exit();
}


<?php
require_once 'connect.php';
require_once 'function.inc.php';

if(isset($_POST['submit'])){
  if(sizeof($_SESSION['errors']) > 0){
    $_SESSION["errors"] = array();
  }
    $username = $_POST['username'];
    $password = $_POST['password'];


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


<?php
  require_once 'connect.php';
  require_once 'function.inc.php';
if (isset($_POST['submit'])) {
  if(sizeof($_SESSION['errors']) > 0){
    $_SESSION["errors"] = array();
  }
  $text = $_POST['text'];
  $img = $_FILES["image"];
  $price = $_POST["price"];
  $date = $_POST["expiration_date"];
  $allowed = array("image/jpeg", "image/gif", "image/png");


  if (emptyInput($text)) {
    array_push($_SESSION['errors'], 'emptyInput');
    header("location: ". $_SERVER["HTTP_REFERER"]);
    exit();
  }else{
    if(in_array($img["type"], $allowed)){
      if($price > 0){
  createNewPage($text, $conn, $img, $date, $price);
    header("location: ../index.php");
    exit();
      }else{
        array_push($_SESSION["errors"], "negativePrice");
        header("location: ".$_SERVER["HTTP_REFERER"]);
        exit();
      }
    }else{
      array_push($_SESSION["errors"], "wrongFileFormat");
      header("location: ".$_SERVER["HTTP_REFERER"]);
      exit();
    }
  }
} else {
  header("location: ../index.php");
  exit();
}
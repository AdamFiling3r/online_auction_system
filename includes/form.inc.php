<?php
if(isset($_POST['submit'])){
    $text = $_POST['text'];
    $img = $_FILES["image"];

    require_once 'connect.php';
    require_once 'function.inc.php';

    if(emptyInput($text) !== false){
      header("location ../form.php?error=emptytext");
      exit();
    }

    createNewPage($text, $conn, $img);
    header("location: ../index.php");

}else{
  header("location: ../form.php");
  exit();
}
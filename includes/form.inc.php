<?php
if(isset($_POST['submit'])){
    $text = $_POST['text'];

    require_once 'connect.php';
    require_once 'function.inc.php';
    require_once "templates.php";

    if(emptyInput($text) !== false){
      header("location ../form.php?error=emptytext");
      exit();
    }
    
    createNewPage($text, $offer);

}else{
  header("location: ../form.php");
  exit();
}
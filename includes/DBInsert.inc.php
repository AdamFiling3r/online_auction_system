<?php
include_once "connect.php";
include_once "function.inc.php";

    if(isset($_POST["submit"])){
    $balance = $_POST["balance"];  
    $url = $_SERVER["REQUEST_URI"];

    intoDB($conn, $balance, $url);
 }else{
     header("location: ../index.php?erorr=wrongAproach");
     exit();
 }
    

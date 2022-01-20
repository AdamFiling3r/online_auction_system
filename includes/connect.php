<?php
    $user = "epiz_30862495";
    $password_db = "KahounNefunguje123";
    $db = "epiz_30862495_rocnikovka_aukce";
    $host = "sql301.epizy.com";

     $conn = mysqli_connect($host, $user, $password_db, $db);
     if(!$conn){
         die("Connection failed: " . mysqli_connect_error());
     }else{
         session_start();
     }
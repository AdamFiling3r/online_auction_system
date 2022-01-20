<?php
    $user = "sql4457624";
    $password_db = "UBNemP9Mjk";
    $db = "sql4457624";
    $host = "sql4.freemysqlhosting.net";

     $conn = mysqli_connect($host, $user, $password_db, $db);
     if(!$conn){
         die("Connection failed: " . mysqli_connect_error());
     }else{
         session_start();
     }
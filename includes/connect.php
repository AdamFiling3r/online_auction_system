<?php
    $user = "sql4457624";
    $password = "UBNemP9Mjk";
    $db = "sql4457624";
     $host = "sql4.freemysqlhosting.net";

     $conn = mysqli_connect($host, $user, $password, $db);
     if(!$conn){
         die("Connection failed: " . mysqli_connect_error());
     }
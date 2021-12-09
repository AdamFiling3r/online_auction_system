<?php
    $user = "dk-308";
     $password = "6ug2rvoi";
     $db = "dk-308_aukce";
     $host = "178.248.248.164";

     $conn = mysqli_connect($host, $user, $password, $db);

     if(!$conn){
         die("Connection failed: " . mysqli_connect_error());
     } else{
         echo("Connection succesful");
     }
     


<?php
     define("user", "sql4457624");
     define("password", "UBNemP9Mjk");
     define("db", "sql4457624");
     define("host", "sql4.freemysqlhosting.net");

     $conn = mysqli_connect(host, user, password, db);
     if(!$conn){
         die("Connection failed: " . mysqli_connect_error());
     }

    


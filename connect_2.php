<?php
    $user = "dk-308";
     $password = "6ug2rvoi";
     $db = "dk-308_aukce";
     $host = "178.248.248.164";
     $port = 3306;

      $link = mysqli_init();
      $succes = mysqli_real_connect(
          $link,
          $host,
          $user,
          $password,
          $db,
          $port
      );

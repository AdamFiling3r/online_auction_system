<?php
include_once "../includes/connect.php";
include_once "../includes/function.inc.php";

    $result = closedOffers($conn, date("Y.m.d"));
    $f = fopen("../includes/closedOffers.txt", "a");
    fwrite($f, "hello, ");
    fclose($f);
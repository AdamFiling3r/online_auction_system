<?php
include_once "includes/connect.php";
include_once "includes/function.inc.php";

$offer = $_GET["offer"];
$user = $_GET["user"] ;
$bid = $_GET["bid"];

bidTo($conn, $offer, $user, $bid);
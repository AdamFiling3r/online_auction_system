<?php
include_once "includes/connect.php";
include_once "includes/function.inc.php";

$offer = $_GET["Oid"];
$user = $_GET["Uid"] ;
$bid = $_GET["price"];

bidTo($conn, $offer, $user, $bid);
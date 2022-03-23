<?php
include_once("function.inc.php");
include_once("connect.php");

// $Uid = $_GET["id"];
// $url = $_GET["url"];
$url = $_SERVER["REQUEST_URI"];

$result = selectAllWhere($conn, "offers", "Uid", $_SESSION["id"]);



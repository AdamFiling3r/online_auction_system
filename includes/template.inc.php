<?php
require_once "connect.php";
require_once "function.inc.php";

$result = userPage($conn);
$descrip_path = $result[0];
// $descrip_path = implode(" ", $result);
$f = fopen($descrip_path[0], "r");
$text = fread($f, filesize($descrip_path[0]));
fclose($f);

<?php
include_once "function.inc.php";
include_once "connect.php";

$Oid = $_GET["offer_id"];

$password = $_POST["password"];
$passwordHass = selectAllWhere($conn, "users", "id", $_SESSION["id"]);
if(password_verify($password, $passwordHass[0][5])){
header("location: ../auction.php?offer_id=$Oid&success");
exit();

}else{
header("location: ../auction.php?offer_id=$OidR&failed");
exit();
}
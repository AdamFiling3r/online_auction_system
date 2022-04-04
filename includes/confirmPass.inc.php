<?php
include_once "function.inc.php";
include_once "connect.php";


$password = $_POST["password"];
$Oid = $_GET["offer_id"];
$amount = $_POST["amount"] + searchArray(2, $Oid)[0][4];
$passwordHass = selectAllWhere($conn, "users", "id", $_SESSION["id"]);
if(password_verify($password, $passwordHass[0][5])){
update($conn, "offers", "price", $amount, "id", $Oid, $_SERVER["HTTP_REFERER"]);
update($conn, "offers", "last_bid_id", $_SESSION["id"], "id", $Oid, $_SERVER["HTTP_REFERER"]);
insert($conn, 3, "bidding_log","offer_id", "Uid", "bid", $Oid, $_SESSION["id"], $amount);
header("location: allOffers.php&succes");
exit();

}else{
header("location: allOffers.php&fail");
exit();
}
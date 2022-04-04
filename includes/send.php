<?php
require_once "connect.php";
$auction = searchArray(2, $_GET["offer_id"]);
$buyer = selectAllWhere($conn, "users", "id", $auction[0][6])[0][6] - $auction[0][4];
$seller = selectAllWhere($conn, "users", "id", $auction[0][1])[0][6] + $auction[0][4];


update($conn, "orders", "sent", 1, "offer_id", $_GET["offer_id"], $_SERVER["HTTP_REFERER"]);
update($conn, "users", "balance", $buyer, "id", $auction[0][6], $_SERVER["HTTP_REFERER"]);
update($conn, "users", "balance", $seller, "id", $auction[0][1], $_SERVER["HTTP_REFERER"]);
header("location: ../templates.php?template_id=4");
exit();
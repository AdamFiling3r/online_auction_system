<?php
include_once "../includes/connect.php";
include_once "../includes/function.inc.php";

    $closedOffers = selectAllWhere($conn, "offers", "expiration_date>", date("Y-m-d"));
    update($conn, "offers", "sold", 1, "expiration_date>", date("Y-m-d"), $_SERVER["REQUEST_URI"]);
    for($i = 0; $i < sizeof($closedOffers); $i++){
        insert($conn, 5, "orders", "Uid_sell", "Uid_buy", "amount", "sent", "offer_id", $closedOffers[$i][1], $closedOffers[$i][6], $closedOffers[$i][4], 0, $closedOffers[$i][0]);
        $seller = selectAllWhere($conn, "users", "id", $closedOffers[$i][1])[0][4];
        $buyer = selectAllWhere($conn, "users", "id", $closedOffers[$i][6])[0][4];
        $name = fread(fopen($closedOffers[$i][3], "r"), filesize($closedOffers[$i][3]));
        sendAuctionMails($buyer, $seller,$name);
    }

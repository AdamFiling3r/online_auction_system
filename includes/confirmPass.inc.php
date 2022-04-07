<?php
include_once "function.inc.php";
include_once "connect.php";

if (isset($_POST["submit"])) {
    if(sizeof($_SESSION['errors']) > 0){
        $_SESSION["errors"] = array();
      }
      if(emptyInput($_POST["password"]) || emptyInput($_POST["amount"])){
          if(emptyInput($_POST["password"])){
              array_push($_SESSION["errors"], "enterPass");
          }
          if(emptyInput($_POST["amount"])){
              array_push($_SESSION["errors"], "enterBid");
          }
          header("location: ".$_SERVER["HTTP_REFERER"]);
      }else{
    $password = $_POST["password"];
    $Oid = $_GET["offer_id"];
    $amount = $_POST["amount"] + searchArray(2, $Oid)[0][4];

    if ($_SESSION["balance"] - $amount < 0) {
        array_push($_SESSION['errors'], 'smallBalance');
        header("location: ". $_SERVER["HTTP_REFERER"]);
        exit();
    } else {
        

            $passwordHass = selectAllWhere($conn, "users", "id", $_SESSION["id"]);
            if (password_verify($password, $passwordHass[0][5])) {
                update($conn, "offers", "price", $amount, "id", $Oid, $_SERVER["HTTP_REFERER"]);
                update($conn, "offers", "last_bid_id", $_SESSION["id"], "id", $Oid, $_SERVER["HTTP_REFERER"]);
                insert($conn, 3, "bidding_log", "offer_id", "Uid", "bid", $Oid, $_SESSION["id"], $amount);
                header("location: ../allOffers.php");
                exit();
            } else {
                array_push($_SESSION["errors"], "passNotCorrect");
                header("location: ".$_SERVER["HTTP_REFERER"]);
                exit();
            }
        
    }
}
} else {
    header("location: ../allOffers.php");
    exit();
}

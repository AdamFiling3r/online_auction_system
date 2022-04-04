<?php
include_once "connect.php";
include_once "function.inc.php";

    if(isset($_POST["submit"])){
        $balance = intval($_POST["balance"]);
        $url = "../insertMoney.php";
        if($_POST["balance"] > 0){
            $balance += $_SESSION["balance"];
            update($conn, "users", "balance", $balance, "id", $_SESSION["id"], $url);
        }else{
            header("location: ../insertMoney.php?error=wrongInput");
            exit();
        }
 }else{
     header("location: ../insertMoney.php?erorr=wrongAproach");
     exit();
 }
    

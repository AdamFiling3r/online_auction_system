<?php
include_once "connect.php";
include_once "function.inc.php";

    if(isset($_POST["submit"])){
        $balance = intval($_POST["balance"]);
        $url = "../insertMoney.php";
        if($balance){
        if($balance > 0){
            $balance += $_SESSION["balance"];
            $_SESSION["balance"] += $balance;
            update($conn, "users", "balance", $balance, "id", $_SESSION["id"], $url);
            header("location: ../index.php");
        }else{
            header("location: ../insertMoney.php?error=wrongInput");
            exit();
        }
    }else{
        header("location: ../insertMoney.php?error=inputNotNum");
        exit();
    }
 }else{
     header("location: ../insertMoney.php?erorr=wrongAproach");
     exit();
 }
    

<?php
include_once "connect.php";
include_once "function.inc.php";

    if(isset($_POST["submit"])){
        if(sizeof($_SESSION['errors']) > 0){
            $_SESSION["errors"] = array();
          }
        $balance = intval($_POST["balance"]);
        $url = "../insertMoney.php";
        if($balance){
        if($balance > 0){
            $balance += $_SESSION["balance"];
            $_SESSION["balance"] += $balance;
            update($conn, "users", "balance", $balance, "id", $_SESSION["id"], $url);
            header("location: ../index.php");
        }else{
            array_push($_SESSION["errors"], "negativeNum");
            header("location: ".$_SERVER["HTTP_REFERER"]);
            exit();
        }
    }else{
        array_push($_SESSION["errors"], "notNum");
        header("location: ".$_SERVER["HTTP_REFERER"]);
        exit();
    }
 }else{
     header("location: ../index.php");
     exit();
 }
    

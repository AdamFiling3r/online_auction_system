<?php

include_once "connect.php";

if(isset($_POST["submit"])){
    if(sizeof($_SESSION["errors"]) > 0){
        $_SESSION["errors"] = array();
    }

    $oldPass = $_POST["oldPass"];
    $newPass = $_POST["newPass"];
    $newPassRep = $_POST["newPassRep"];

    if(emptyInput($oldPass) || emptyInput($newPass) || emptyInput($newPassRep)){
        array_push($_SESSION["errors"], "emptyInputPassChange");
        header("location: ".$_SERVER["HTTP_REFERER"]);
        exit();
    }
    if(passwShortLong($newPass)){
        array_push($_SESSION["errors"], "passWrongLength");
        header("location: ".$_SERVER["HTTP_REFERER"]);
        exit();
    }

    if(password_verify($oldPass, $_SESSION["password"])){
        if($newPass == $newPassRep){
            $passHass = password_hash($newPass, PASSWORD_DEFAULT);
            update($conn, "users", "users.password", $passHass, "id", $_SESSION["id"], $_SERVER["HTTP_REFERER"]);
            $_SESSION["password"] = $passHass;
            array_push($_SESSION["errors"], "passChanged");
            header("location: ".$_SERVER["HTTP_REFERER"]);
            exit();
        }else{
            array_push($_SESSION["errors"], "newPassNotMatch");
            header("location: ".$_SERVER["HTTP_REFERER"]);
            exit();
        }
    }else{
        array_push($_SESSION["errors"], "passNotMatch");
        header("location: ".$_SERVER["HTTP_REFERER"]);
        exit();
    }


}else{
    header("location: ../index.php");
    exit();
}
<?php
include_once "function.inc.php";

$user = "root";
$password_db = "";
$db = "rocnikovka_aukce";
$host = "localhost";

$conn = mysqli_connect($host, $user, $password_db, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    session_start();
    $_SESSION["result"] = selectAll($conn, "offers");
    if(!isset($_SESSION["errors"])){
        $_SESSION["errors"] = array();
    }
}

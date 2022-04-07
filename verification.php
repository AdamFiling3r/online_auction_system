<?php

include_once "includes/function.inc.php";
include_once "includes/connect.php";
$_SESSION["errors"] = array();

$token = $_GET["token"];
$Uid = $_GET["Uid"];
$user = selectAllWhere($conn, "users", "id", $Uid);
if($user[0][8] == $token){
    update($conn, "users", "verified", 1, "id", $Uid, "index.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <title>Online Auction Systems</title>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
</head>

<body class="bg-dark">
    <!-- Navbar -->

    <?php
    include_once("navbar.php");
    if($user[0][8] == $token){
        include_once "HTML_templates/verified.php";
    }else{
        include_once "HTML_templates/verificationFailed.php";
    }
    include_once("footer.php");
    ?>

</body>

</html>
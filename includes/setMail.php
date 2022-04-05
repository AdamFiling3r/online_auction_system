<?php
require "../PHPMailer/vendor/phpmailer/phpmailer/src/PHPMailer.php";
require "../PHPMailer/vendor/phpmailer/phpmailer/src/SMTP.php";
require "../PHPMailer/vendor/phpmailer/phpmailer/src/Exception.php";
//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Create instance of PHPMailer
$_SESSION["mail"] = new PHPMailer();
//Set mailer to use smtp
$_SESSION["mail"]->isSMTP();
//Define smtp host
$_SESSION["mail"]->Host = "smtp.gmail.com";
//Enable smtp authentication
$_SESSION["mail"]->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
$_SESSION["mail"]->SMTPSecure = "tls";
//Port to connect smtp
$_SESSION["mail"]->Port = "587";
//Set gmail username
$_SESSION["mail"]->Username = "adam.filinger@gmail.com";
//Set gmail password
$_SESSION["mail"]->Password = "DRzoiberk007";
//Set sender e_ses$_SESSION["mail"]
$_SESSION["mail"]->setFrom('adam.filinger@gmail.com');
<?php
$rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);

require "$rootDir/PHPMailer/vendor/phpmailer/phpmailer/src/PHPMailer.php";
require "$rootDir/PHPMailer/vendor/phpmailer/phpmailer/src/SMTP.php";
require "$rootDir/PHPMailer/vendor/phpmailer/phpmailer/src/Exception.php";
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
$_SESSION["mail"]->Username = "oas.emails@gmail.com";
//Set gmail password
$_SESSION["mail"]->Password = "mjdueh96756*";
//Set sender e_ses$_SESSION["mail"]
$_SESSION["mail"]->setFrom('oas.emails@gmail.com');
$_SESSION["mail_set"] = true;

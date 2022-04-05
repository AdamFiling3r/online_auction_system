<?php


// aukce skonci --> zjistime kdo prihodil jako posledni --> vytvoříme order --> 
// offers(sold) + orders(sent) = false --> aukce se odstrani ze stranky -->
// posleme vlastnikovi aukce upozorneni na zaslani predmetu --> 
// vlastnik aukce potvrdi odeslani --> offers(sold) + orders(sent) = true --> 
// kupujicimu se odectou penize

// function offerSent($Uid, $Oid, $price, $conn)
// {

//     $stmt = mysqli_stmt_init($conn);
//     $sql = "UPDATE orders SET sent = 1 WHERE offer_id = ?;";
//     // UPDATE orders SET sent = 1 WHERE offer_id = ?;
//     if (!mysqli_stmt_prepare($stmt, $sql)) {
//         echo (mysqli_stmt_error($stmt));
//         echo ("stmtFailed");
//         exit();
//     } else {
//         // mysqli_stmt_bind_param($stmt, "iiii", $Oid, $Oid, $price, $Uid);
//         mysqli_stmt_bind_param($stmt, "i", $Oid);
//         mysqli_stmt_execute($stmt);
//         $sql2 = "UPDATE users SET balance = balance - ? WHERE id = ?;";
//         if (!mysqli_stmt_prepare($stmt, $sql2)) {
//             mysqli_stmt_error($stmt);
//             exit();
//         } else {
//                 mysqli_stmt_bind_param($stmt, "ii", $price, $Uid);
//                 mysqli_stmt_execute($stmt);
//                 // $result = mysqli_fetch_all(mysqli_stmt_get_result($stmt));
//                 mysqli_stmt_close($stmt);
//                 // print_r($result);
//                 echo ("great success");
//             }
//         }
//     }

require_once "includes/function.inc.php";
require_once "includes/connect.php";
// require_once("PHP_ses$_SESSION["mail"]er/vendor/autoload.php");
// use PHP_ses$_SESSION["mail"]er\PHP_ses$_SESSION["mail"]er\PHP_ses$_SESSION["mail"]er;
// $_SESSION["mail"] = new PHP_ses$_SESSION["mail"]er();
// $_SESSION["mail"]->isSMTP();
// $_SESSION["mail"]->SMTPAuth = true;
// $_SESSION["mail"]->SMTPSecure = "tls";
// $_SESSION["mail"]->Host = "smtp.g_ses$_SESSION["mail"].com";
// $_SESSION["mail"]->Port = 587;
// $_SESSION["mail"]->isHTML();
// $_SESSION["mail"]->Username = "adam.filinger@g_ses$_SESSION["mail"].com";
// $_SESSION["mail"]->Password = "DRzoiberk007";
// $_SESSION["mail"]-> setFrom("adam.filinger@g_ses$_SESSION["mail"].com");
// $_SESSION["mail"]->Subject = "Hello";
// $_SESSION["mail"]->Body = "Test _ses$_SESSION["mail"]";
// $_SESSION["mail"]->addAddress("eidamfilin@g_ses$_SESSION["mail"].com");

// if($_SESSION["mail"]->send()){
// echo("great success");
// }else{
// echo("big failure");
// }

//E_ses$_SESSION["mail"] subject
$_SESSION["mail"]->Subject = "Jsi kokot";
//Set sender e_ses$_SESSION["mail"]
$_SESSION["mail"]->setFrom('adam.filinger@g_ses$_SESSION["mail"].com');
//Enable HTML
//Attachment
//E_ses$_SESSION["mail"] body
$_SESSION["mail"]->Body = "Jsi debil";
//Add recipient
$_SESSION["mail"]->addAddress('adam.filinger@student.gyarab.cz');
//Finally send e_ses$_SESSION["mail"]
if ( $_SESSION["mail"]->send() ) {
    echo "Email Sent..!";
}else{
    print_r("Message could not be sent. _ Error: ".$_SESSION["mail"]->ErrorInfo);
}
//Closing smtp connection
$_SESSION["mail"]->smtpClose();
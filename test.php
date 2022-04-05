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
// require_once("PHPMailer/vendor/autoload.php");
// use PHPMailer\PHPMailer\PHPMailer;
// $mail = new PHPMailer();
// $mail->isSMTP();
// $mail->SMTPAuth = true;
// $mail->SMTPSecure = "tls";
// $mail->Host = "smtp.gmail.com";
// $mail->Port = 587;
// $mail->isHTML();
// $mail->Username = "adam.filinger@gmail.com";
// $mail->Password = "DRzoiberk007";
// $mail-> setFrom("adam.filinger@gmail.com");
// $mail->Subject = "Hello";
// $mail->Body = "Test mail";
// $mail->addAddress("eidamfilin@gmail.com");

// if($mail->send()){
// echo("great success");
// }else{
// echo("big failure");
// }

$array = array();
array_push($array, "hello");
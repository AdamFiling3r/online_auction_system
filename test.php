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


echo(bin2hex(random_bytes(5)));
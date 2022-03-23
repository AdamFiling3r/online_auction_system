<?php

include_once "includes/connect.php";

$Oid = $_GET["Oid"];
$Uid = $_GET["Uid"];
$price = $_GET["price"];

$stmt = mysqli_stmt_init($conn);
$sql = "SELECT Uid FROM bidding_log WHERE offer_id = ? ORDER BY time desc;";
if(!mysqli_stmt_prepare($stmt, $sql)){
    echo("stmtFailed");
} else{
    mysqli_stmt_bind_param($stmt, "i", $Oid);
    mysqli_stmt_execute($stmt);
    $winningUser = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));
    $sql2 = "INSERT INTO orders (Uid_from, Uid_to, offer_id) VALUES (?, ?, ?);";
    if(!mysqli_stmt_prepare($stmt, $sql2)){
        echo(mysqli_stmt_error($stmt));
        echo("stmt2Failed");
        exit();
    }else{
        mysqli_stmt_bind_param($stmt, "iiii", $Uid, $winningUser, $Oid, $Uid);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
}

    



//     $sql2 = "UPDATE users SET balance = balance - ? WHERE id = ?;";
//     if(!mysqli_stmt_prepare($stmt, $sql2)){
//         echo("stmt2Failed");
//     } else{
//         mysqli_stmt_bind_param($stmt, "ii", $price, $Uid);
//         mysqli_stmt_execute($stmt);
//         mysqli_stmt_close($stmt);
//     }
// }

<?php

include_once "connect.php";
// $name = "adam";
// $username = "adam";
// $password = "asdf";
// $email = "adam@gmail.com";

// //$sql = "INSERT INTO users (name, username, password, email) VALUES ({$name}, {$username}, {$password}, {$email});";
// $sql = "INSERT INTO users (name, username, password, email) VALUES (?, ?, ?, ?);";
// // $sql = "SELECT * FROM users;";
// $stmt = mysqli_stmt_init($conn);
// mysqli_stmt_prepare($stmt, $sql);
// mysqli_stmt_bind_param($stmt, "ssss", $name, $username, $password, $email);
// if(mysqli_stmt_execute($stmt)){
//     echo "great success";
// } else{
//     echo mysqli_stmt_error($stmt);
// }
// mysqli_stmt_close($stmt);

mkdir("../users/filip");
mkdir("../users/filip/filip-descrip");
mkdir("../users/filip/filip-img");
if(dir("../users/filip")){
    echo("great success");
}
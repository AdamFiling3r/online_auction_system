<?php

require_once "connect.php";

function emptyInputRegister($name, $email, $username, $password, $rep_password)
{
    $result = false;
    if (empty($name) || empty($email) || empty($username) || empty($password) || empty($rep_password)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUsername($username)
{
    $result = false;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email)
{
    $result = false;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function passNotMach($password, $rep_password)
{
    $result = false;
    if ($password != $rep_password) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function userExists($username, $email, $conn)
{
    $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $email, $name, $password)
{
    $sql = "INSERT INTO users (name, username, password, email, folder) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtfailed");
        exit();
    }

    $hass_password = password_hash($password, PASSWORD_DEFAULT);
    $user_offers = "$username-offers";
    $user_purchases = "$username-purchases";

    mysqli_stmt_bind_param($stmt, "sssss", $name, $username, $hass_password, $email, $user_folder);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    mkdir("../users/$username");
    mkdir("../users/$username/$user_offers");
    mkdir("../users/$username/$user_purchases");

    header("location: ../login.php?error=none");
    exit();
}

function emptyInputLogin($username, $password)
{
    $result = false;
    if (empty($username) || empty($password)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function emptyInput($text)
{
    $result = false;
    if (empty($text)) {
        $result = true;
    } else {
        $resul = false;
    }
    return $result;
}

function loginUser($conn, $username, $password)
{
    $userExists = userExists($username, $username, $conn);

    if ($userExists === false) {
        header("location: ../login.php?error=hovno");
        exit();
    }

    $password_hash = $userExists["password"];
    $checkPass = password_verify($password, $password_hash);

    if ($checkPass === false) {
        header("location: ../login.php?error=penis");
        exit();
    } else if ($checkPass === true) {
        session_start();
        $_SESSION["username"] = $userExists["username"];
        $_SESSION["loggedin"] = true;
        $_SESSION["id"] = $userExists["id"];
        header("location: ../index.php");
        exit();
    }
}

function randomString()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < 6; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}

function createNewPage($text, $conn, $img)
{
    $user = $_SESSION['username'];
    $Uid = $_SESSION["id"];
    $randomStr = randomString();
    $descripPath = "users/$user/$user-descrip/$randomStr.txt";
    $imgPath = "users/$user/$user-img/".$img["name"];

    if (is_uploaded_file($img["tmp_name"])) {
        if (move_uploaded_file($img["tmp_name"], "../".$imgPath)) {
        } else {
            header("location: ../creatingForm.php?erorr=couldNotMoveToDest");
            exit;
        }
    } else {
        header("location: ../creatingForm.php?erorr=fileNotUploaded");
        exit;
    }


    $sql = "INSERT INTO offers (Uid, descrip, img) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../creatingForm.php?erorr=stmtfailed");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "sss", $Uid, $descripPath, $imgPath);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        $f = fopen("../$descripPath", "a");
        fputs($f, $text);
        fclose($f);
    }
}


function userPage($conn)
{
    $Uid = $_SESSION["id"];
    $sql = "SELECT descrip, img FROM offers WHERE Uid = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: index.php?erorr=penis");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $Uid);
        mysqli_stmt_execute($stmt);
        // $result = array();
        $result = mysqli_fetch_all(mysqli_stmt_get_result($stmt));
        // while($row = mysqli_fetch_array(mysqli_stmt_get_result($stmt))){
        //     $result[] = $row["descrip"];
        // }
        mysqli_stmt_close($stmt);
        return $result;
    }
}

function dataUri($file, $mime){
    $contents = file_get_contents($file);
    $base64   = base64_encode($contents); 
    return ('data:' . $mime . ';base64,' . $base64);
}

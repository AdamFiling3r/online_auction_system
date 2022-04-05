<?php

require_once "connect.php";

function emptyInputRegister($first_name, $last_name, $email, $username, $password, $rep_password)
{
    $result = false;
    if (empty($first_name) || empty($last_name) || empty($email) || empty($username) || empty($password) || empty($rep_password)) {
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


function passWrongFormat($pass)
{
    $result = false;
    if (!preg_match("/\d/", $pass)) {
        $result = true;
    }
    if (!preg_match("/[A-Z]/", $pass)) {
        $result = true;
    }
    if (!preg_match("/[a-z]/", $pass)) {
        $result = true;
    }
    if (!preg_match("/\W/", $pass)) {
        $result = true;
    }
    if (preg_match("/\s/", $pass)) {
        $result = true;
    }
    return $result;

}
function passwShortLong($pass)
{
    $result = false;
    if (strlen($pass) < 8 || strlen($pass) > 16) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;

}


function userExists($username, $email, $conn)
{
    $loginName = array($username, $email);
    $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_execute($stmt, $loginName);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $email, $first_name, $last_name, $password)
{

    $hass_password = password_hash($password, PASSWORD_DEFAULT);
    $user_descrip = "$username-descrip";
    $user_img = "$username-img";
    $token = bin2hex(random_bytes(10));

    insert(
        $conn,
        6,
        "users",
        "first_name",
        "last_name",
        "username",
        "email",
        "password",
        "token",
        $first_name,
        $last_name,
        $username,
        $email,
        $hass_password,
        $token
    );

    mkdir("../users/$username");
    mkdir("../users/$username/$user_descrip");
    mkdir("../users/$username/$user_img");

    header("location: ../login.php");
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
        header("location: ../login_wrong_error.php");
        exit();
    }

    $password_hash = $userExists["password"];
    $checkPass = password_verify($password, $password_hash);

    if ($checkPass === false) {
        header("location: ../login.php?error=penis");
        exit();
    } else if ($checkPass === true) {
        session_start();
        $_SESSION = $userExists;
        $_SESSION["loggedin"] = true;
        $_SESSION["bids"] = selectAllWhere($conn, "bidding_log", "Uid", $_SESSION["id"]);
        header("location: ../index.php");
        exit();
    }
}

function createNewPage($text, $conn, $img, $date, $price)
{
    $user = $_SESSION['username'];
    $Uid = $_SESSION["id"];
    $randomStr = bin2hex(random_bytes(3));
    $descripPath = "users/$user/$user-descrip/$randomStr.txt";
    $imgPath = "users/$user/$user-img/" . $img["name"];

    if (is_uploaded_file($img["tmp_name"])) {
        if (move_uploaded_file($img["tmp_name"], "../" . $imgPath)) {
        } else {
            header("location: ../creatingForm.php?erorr=couldNotMoveToDest");
            exit;
        }
    } else {
        header("location: ../creatingForm.php?erorr=fileNotUploaded");
        exit;
    }
    insert(
        $conn,
        5,
        "offers",
        "Uid",
        "descrip",
        "img",
        "expiration_date",
        "price",
        $Uid,
        $descripPath,
        $imgPath,
        $date,
        $price
    );
        $f = fopen("../$descripPath", "a");
        fputs($f, $text);
        fclose($f);

}

//$type defines if you want to search the array by user(case 1) or by offer(case 2)
//$id defines the id of either a user or specific offer
function searchArray($type, $id)
{
    $offers = array();
    switch ($type) {
        case 1:
            for ($i = 0; $i < sizeof($_SESSION["result"]); $i++) {
                if ($_SESSION["result"][$i][4] == $id) {
                    array_push($offers, $_SESSION["result"][$i]);
                }
            }
        case 2:
            for ($i = 0; $i < sizeof($_SESSION["result"]); $i++) {
                if ($_SESSION["result"][$i][0] == $id) {
                    array_push($offers, $_SESSION["result"][$i]);
                }
            }
    }
    return $offers;
}


//$conn is predefined 
//$numOfParams is a number representing the number of paramenters you want to insert
//$tableName is the name of the table you want to insert into
//The first half of the optional parameters will define the COLUMNS you want to insert into
//The second half of the optional paramenters will define the VALUES you want to insert
function insert($conn, $numOfParams, $tableName)
{
    $stmt = mysqli_stmt_init($conn);
    $columns = "(";
    $values = array();
    $numOfValues = "(";
    $number = func_num_args() - ($numOfParams + 1);
    echo ($number . ", ");
    for ($n = 3; $n < func_num_args(); $n++) {
        echo ($n . ", ");
        if ($n <= $number) {
            if ($n !== $number) {
                $columns .= func_get_arg($n) . ", ";
            } else {
                $columns .= func_get_arg($n);
            }
        } else {
            array_push($values, func_get_arg($n));
            if ($n !== func_num_args() - 1) {
                $numOfValues .= "?, ";
            } else {
                $numOfValues .= "?";
            }
        }
    }
    $columns .= ")";
    $numOfValues .= ")";
    $sql = "INSERT INTO $tableName $columns VALUES $numOfValues;";
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        exit("stmtFailed");
    } else {
        if (mysqli_stmt_execute($stmt, $values)) {
            mysqli_stmt_close($stmt);
        } else {
            exit("execFailed");
        }
    }
}

//$setCol specifies the column that you want to set the new value
//$set is the new value you want to set
//$column specifies the column by which you want to search
//$id is the id by which you want to search
function update($conn, $tableName, $setCol, $set, $column, $id, $url)
{
    $stmt = mysqli_stmt_init($conn);
    $sql = "UPDATE $tableName SET $setCol = $set WHERE $column= $id;";
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        exit("prepareFailed");
    } else {
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_close($stmt);
        } else {
            header("location: $url?execFailed");
            exit("execFailed");
        }
    }
}

//$column specifies the column by which you want to search the database
//$id is the id you want to search in the column
function selectAllWhere($conn, $tableName, $column, $id)
{
    $stmt = mysqli_stmt_init($conn);
    $sql = "SELECT * FROM $tableName WHERE $column= $id;";
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        exit("stmtFailed");
    } else {
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_fetch_all(mysqli_stmt_get_result($stmt));
            mysqli_stmt_close($stmt);
            return $result;
        } else {
            exit("execFailed");
        }
    }
}

function selectAll($conn, $tableName)
{
    $stmt = mysqli_stmt_init($conn);
    $sql = "SELECT * FROM $tableName;";
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        exit("stmtFailed");
    } else {
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_fetch_all(mysqli_stmt_get_result($stmt));
            mysqli_stmt_close($stmt);
            return $result;
        } else {
            exit("execFailed");
        }
    }
}

function sendAuctionMails($seller, $buyer, $name){

    $_SESSION["mail"]->Subject = "You have won an auction!";

//Enable HTML
//Attachment
//E_ses$_SESSION["mail"] body
$_SESSION["mail"]->Body = "Congratulation, you have won" . $name . ". See your profile for more information.";
//Add recipient
$_SESSION["mail"]->addAddress($buyer);
//Finally send e_ses$_SESSION["mail"]
if ( $_SESSION["mail"]->send() ) {
    $_SESSION["mail"]->Subject = "Your auction has ended";
    $_SESSION["mail"]->Body = "Your offer". $name ."has ended. See your profile for more information.";
    $_SESSION["mail"]->addAddress($seller);
    if($_SESSION["mail"]->send()){
        echo("good");
    }else{
        print_r("bad: ". $_SESSION["mail"]->ErrorInfo);
    }
}else{
    print_r("Message could not be sent. _ Error: ".$_SESSION["mail"]->ErrorInfo);
}
//Closing smtp connection
$_SESSION["mail"]->smtpClose();

}
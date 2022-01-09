<?php

    require_once "connect.php";
    
    function emptyInputRegister($name, $email, $username, $password, $rep_password){
        $result = false;
        if(empty($name) || empty($email) || empty($username) || empty($password) || empty($rep_password)){
            $result = true;
        } else{
            $result = false;
        }
        return $result;
    }
    
    function invalidUsername($username){
        $result = false;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
            $result = true;
        } else{
            $result = false;
        }
        return $result;
    }

    function invalidEmail($email){
        $result = false;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        } else{
            $result = false;
        }
        return $result;
    }

    function passNotMach($password, $rep_password){
        $result = false;
        if($password != $rep_password){
            $result = true;
        } else{
            $result = false;
        }
        return $result;
    }

    function userExists($username, $email, $conn){
        $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../register.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }else{
            $result = false;
            return $result;
         }

         mysqli_stmt_close($stmt);

    }

    function createUser($conn, $username, $email, $name, $password){
        $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../register.php?error=stmtfailed");
            exit();
        }

        $hass_password = password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "sss", $username, $hass_password, $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("location: ../login.php?error=none");
        exit();

    }

    function emptyInputLogin($username, $password){
        $result = false;
        if(empty($username) || empty($password)){
            $result = true;
        } else{
            $result = false;
        }
        return $result;
    }

    function loginUser($conn, $username, $password){
        $userExists = userExists($username, $username, $conn);

        if($userExists === false){
            header("location: ../login.php?error=wrongLogin");
            exit();
        }

        $password_hash = $userExists["password"];
        $checkPass = password_verify($password, $password_hash);

        if($checkPass === false){
            header("location: ../login.php?error=wrongLogin");
            exit();
        }else if($checkPass === true){
            session_start();
            $_SESSION["username"] = $userExists["username"];
            $_SESSION["loggedin"] = true;
            header("location: ../index.php");
            exit();
        }
    }


  
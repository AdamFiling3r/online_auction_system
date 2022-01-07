<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $rep_password = $_POST['rep_password'];

    require_once 'connect_2.php';
    require_once 'function.inc.php';

    
}
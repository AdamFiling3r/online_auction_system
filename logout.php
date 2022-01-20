<?php
include_once "includes/connect.php";
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to index page
header("location: index.php");
exit;
?> 
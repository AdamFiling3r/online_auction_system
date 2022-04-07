<?php
// Unset all of the session variables
$_SESSION = array();
 

// Redirect to index page
header("location: ../index.php");
exit;
?> 
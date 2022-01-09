<?php
require_once "includes/connect.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>Register</title>
</head>
  
<?php
include_once "navbar.php";
?>

<section class="register-form">
    <form action="includes/register.inc.php" method="post">
        <input type="text" name="name" placeholder="Enter full name">
        <input type="text" name="email" placeholder="Enter email">
        <input type="text" name="username" placeholder="Enter username">
        <input type="password" name="password" placeholder="Enter password">
        <input type="password" name="rep_password" placeholder="Check password">
        <button type="submit" name="submit">Sign Up</button>
    </form>
</section>


</body>
</html>
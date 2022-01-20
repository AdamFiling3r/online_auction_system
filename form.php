<?php
include_once "includes/connect.php";
include_once "includes/form_inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <?php
    include_once "navbar.php";
    ?>

    <section class="newPageForm">
    <form action="includes/form.inc.php" method="post">  
        <input type="text" name="text" placeholder="Type something">
        <button type="submit" name="submit">Submit</button>
    </form>
</section>
    
</body>
</html>
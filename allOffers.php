<?php
require_once "includes/connect.php";
require_once "includes/DBPull.inc.php";

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
    <title>Main</title>
</head>
<?php
include_once "navbar.php";
?>

<body>
    <?php
    // for($y = 0; $y < sizeof($descrip_path); $y++){
    //     for($i = 0; $i < sizeof($descrip_path); $i++){
    //         include_once "includes/template_card.inc.php";
    //     }
    // }
    for ($y = 0; $y < sizeof($result); $y++) {
        include("includes/template_card.inc.php");
    }
    ?>

</body>

</html>
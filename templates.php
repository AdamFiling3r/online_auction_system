<?php
require_once "includes/connect.php";
require_once "includes/function.inc.php";

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
    <title>Template</title>
</head>
<?php
include_once "navbar.php";
?>

<body>
    <?php
    switch($_GET["template_id"]){
        case 1:
            echo("<h5>My auctions</h5>");
            for ($y = 0; $y < sizeof($_SESSION["result"]); $y++) {
                if ($_SESSION["result"][$y][1] == $_SESSION["id"]) {
                        include("includes/template_card.inc.php");
                }
            }
            break;
        case 2:
            echo("<h5>My bids</h5>");
            for ($y = 0; $y < sizeof($_SESSION["result"]); $y++) {
                if ($_SESSION["result"][$y][6] == $_SESSION["id"]) {
                    if ($_SESSION["result"][$y][7] == 0) {
                        include("includes/template_card.inc.php");
                    }
                }
            }
            break;
        case 3:
            echo("<h5>My purchases</h5>");
            for ($y = 0; $y < sizeof($_SESSION["result"]); $y++) {
                if ($_SESSION["result"][$y][6] == $_SESSION["id"]) {
                    if ($_SESSION["result"][$y][7] == 1) {
                        include("includes/template_card.inc.php");
                    }
                }
            }
            break;
        case 4:
            echo("<h5>To send</h5>");
            for ($y = 0; $y < sizeof($_SESSION["result"]); $y++) {
                if ($_SESSION["result"][$y][1] == $_SESSION["id"]) {
                    if (($_SESSION["result"][$y][7] == 1) && (selectAllWhere($conn, "orders", "offer_id", $_SESSION["result"][$y][0])[0][4] == 0)) {
                        include("includes/template_card.inc.php");
                    }
                }
            }
            break;
    }
    ?>
</body>

</html>
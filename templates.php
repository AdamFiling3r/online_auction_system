<?php
require_once "includes/connect.php";
require_once "includes/function.inc.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <title>Template</title>
</head>
<?php
include_once "navbar.php";
?>

<body  class="bg-dark">
    <?php
    switch($_GET["template_id"]){
        case 1:
            
            for ($y = 0; $y < sizeof($_SESSION["result"]); $y++) {
                if ($_SESSION["result"][$y][1] == $_SESSION["id"]) {
                        include("includes/template_card.inc.php");
                }
            }
            break;
        case 2:
            
            for ($y = 0; $y < sizeof($_SESSION["result"]); $y++) {
                if ($_SESSION["result"][$y][6] == $_SESSION["id"]) {
                    if ($_SESSION["result"][$y][7] == 0) {
                        include("includes/template_card.inc.php");
                    }
                }
            }
            break;
        case 3:
            
            for ($y = 0; $y < sizeof($_SESSION["result"]); $y++) {
                if ($_SESSION["result"][$y][6] == $_SESSION["id"]) {
                    if ($_SESSION["result"][$y][7] == 1) {
                        include("includes/template_card.inc.php");
                    }
                }
            }
            break;
        case 4:
            
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

<?php
    include_once("footer.php");
    ?>
</body>

</html>
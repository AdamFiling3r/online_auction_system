<?php
include_once "includes/function.inc.php";
include_once "includes/connect.php";
$auction = searchArray(2, $_GET["offer_id"]);
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
    <title>Auction</title>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
</head>

<body class="bg-dark">

<?php
include_once("navbar.php");
?>

    <section class="bg-dark text-light pt-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1><?php echo fread(fopen($auction[0][3], "r"), filesize($auction[0][3])); ?></h1>
                    <p class="lead my-4">
                        Expiration date:
                        <?php echo date($auction[0][8]) ?>
                    </p>
                    <p class="lead my-4">
                        Price:
                        <?php echo $auction[0][4] ?>
                    </p>
                    <p class="lead my-4">
                        Created by:
                        <?php echo (selectAllWhere($conn, "users", "id", $auction[0][1])[0][3]) ?>
                    </p>
                    <p class="lead my-4">
                        Last bidder:
                        <?php if($auction[0][6] == 0){
                            echo "No bids yet";
                        }else{
                            echo (selectAllWhere($conn, "users", "id", $auction[0][6])[0][3]);
                        } 
                        
                        ?>
                    </p>
                </div>
                <img class="img-fluid d-none d-sm-block" style="width: 20%; height: 20%;" src="<?php echo $auction[0][2]; ?>" alt="trade">
            </div>
        </div>
    </section>
    <?php
    if($auction[0][7] != 1){
        if($auction[0][1] != $_SESSION["id"]){
        require_once("HTML_templates/confirmPassForm.php");
        }
    }else{
        if(selectAllWhere($conn, "orders", "offer_id", $auction[0][0])[0][4] == 0 ){
            if($auction[0][1] == $_SESSION["id"]){
                echo('<button class="btn btn-success btn-lg my-4"> <a href="includes/send.php?offer_id='. $auction[0][0] .'" class="text-dark" style="text-decoration: none;">Send</a></button>');
            }else{
                require_once("HTML_templates/waitingMess.php");
            }
        }else{
            require_once("HTML_templates/soldMess.php");
        }
    }
    ?>

<?php
include_once("footer.php");
?>

</body>

</html>
<?php
include_once "includes/function.inc.php";
$auction = searchArray(2, $_GET["offer_id"]);
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
    <title>Auction</title>
</head>

<body>

<?php
include_once("navbar.php");
?>

    <section class="bg-dark text-light pt-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1><?php echo fread(fopen($auction[0][3], "r"), filesize($auction[0][3])); ?></h1>
                    <p class="lead my-4">
                        <?php echo date($auction[0][7]) ?>
                    </p>
                    <p class="lead my-4">
                        <?php echo $auction[0][4] ?>
                    </p>
                    <button class="btn btn-success btn-lg my-4"><a href="confirmPass.php?offer_id=<?php echo($auction[0][0]) ?>">Confirm password</a></button>
                </div>
                <img class="img-fluid d-none d-sm-block" style="width: 20%; height: 20%;" src="<?php echo $auction[0][2]; ?>" alt="trade">
            </div>
        </div>
    </section>

</body>

</html>

<?php
include_once "DBPull.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Online Auction Systems</title>
</head>
<body>


<section class="bg-dark text-light pt-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1><?php echo fread(fopen($_SESSION["result"][$y][1], "r"), filesize($_SESSION["result"][$y][1])); ?></h1>
                    <p class="lead my-4">
                    <?php echo date($_SESSION["result"][$y][6]) ?>
                    </p>
                    <p class="lead my-4">
                    <?php echo $_SESSION["result"][$y][5] ?>
                    </p>
                    <button class="btn btn-success btn-lg my-4"> <a href="register.html" class="text-dark" style="text-decoration: none;">Go to auction</a></button>
                </div>
                <img class="img-fluid d-none d-sm-block" style="width: 20%; height: 20%;" src="<?php echo $_SESSION["result"][$y][2]; ?>" alt="trade">
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
<?php
require_once "includes/connect.php";
$_SESSION["errors"] = array();
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
    <title>Online Auction Systems</title>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
</head>

<body class="bg-dark">
    <!-- Navbar -->

    <?php
    include_once("navbar.php");
    ?>

    <!-- Showcase -->

    <section class="bg-dark text-light pt-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1>Trade in a online <span class="text-warning">auction system</span></h1>
                    <p class="lead my-4">
                        Trade among other people on a website. Buy or sell items you do not need anymore. Register today and start trading.
                    </p>
                    <button class="btn btn-success btn-lg my-4"> <a href="register.php" class="text-dark" style="text-decoration: none;">Register</a></button>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="img/showcase.svg" alt="trade">
            </div>
        </div>
    </section>

    <!-- Mid showcase -->

    <section class="bg-success p-5 text-light text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h3>Our system is powered by <span class="text-warning">crypto</span>. Because we believe that the crypto is the future.</h3>
                    <p class="lead">Full <a href="#" class="text-warning" style="text-decoration: none;">list</a> of supported tokens and coins</p>
                </div>
                <img class="img-fluid w-25 d-none d-sm-block" src="img/crypto.svg" alt="crypto">
            </div>

        </div>
    </section>
    <?php
    include_once("footer.php");
    ?>




    

</body>

</html>
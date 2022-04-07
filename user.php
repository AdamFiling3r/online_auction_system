<?php
require_once "includes/connect.php";
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
                    <p class="lead my-4">
                        Username:<?php echo($_SESSION["username"]) ?>
                    </p>
                    <br>
                    <p class="lead my-4">
                        Name:<?php echo($_SESSION["first_name"]); echo(" "); echo($_SESSION["last_name"]) ?>
                    </p>
                    <br>
                    <p class="lead my-4">
                        Balance:<?php echo($_SESSION["balance"]) ?>
                    </p>
                    <br>
                    
                    
                </div>
            </div>
        </div>
    </section>
    <section class="changePassForm">
<form class="vh-100 gradient-custom" enctype="multipart/form-data" action="includes/changePassword.inc.php" method="post">
<div class="container py-5 h-100">
<div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-secondary text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
                <div class="mb-md-5 mt-md-4 pb-5">
                    <h2 class="fw-bold mb-2 text-uppercase">
                        Change password
                    </h2>
                    <div class="form-outline form-white mb-4">
                        <input type="password" name="oldPass" class="form-control form-control-lg" />
                        <label class="form-label" for="text">
                            Old password
                        </label>
                        <input type="password" name="newPass" class="form-control form-control-lg" />
                        <label class="form-label" for="text">
                            New password
                        </label>
                        <input type="password" name="newPassRep" class="form-control form-control-lg" />
                        <label class="form-label" for="text">
                            New password repeat
                        </label>
                    <button class="btn btn-outline-light btn-lg px-5" type="submit" name="submit">
                        Submit
                    </button>
                    <ul>
                        <?php
                        
                        if(in_array("emptyInputPassChange", $_SESSION["errors"])){
                            echo("<li>Enter your old password and your new password</li>");
                        }
                        if(in_array("passWrongLength", $_SESSION["errors"])){
                            echo("<li>Password must be between 8 to 16 characters</li>");
                        }
                        if(in_array("newPassNotMatch", $_SESSION["errors"])){
                            echo("<li>Password don't match</li>");
                        }
                        if(in_array("passNotMatch", $_SESSION["errors"])){
                            echo("<li>Wrong password</li>");
                        }
                        if(in_array("passChanged", $_SESSION["errors"])){
                            echo("<li>Your password has been successfuly updated</li>");
                        }
                        
                        ?>

                    </ul>
                    <div class="form-outline form-white mb-4">
        </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</form>
</section>
    <?php
    include_once("footer.php");
    ?>




    

</body>

</html>
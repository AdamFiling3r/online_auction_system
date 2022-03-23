<?php
include_once "includes/connect.php";
$Oid = $_GET["offer_id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js">
    </script>
    <title>Confirm your password</title>
</head>

<body class="bg-dark">
    <?php include_once "navbar.php"; ?>
    <section class="newPageForm">
        <form class="vh-100 gradient-custom" enctype="multipart/form-data" action="includes/confirmPass.inc.php?offer_id=<?php echo($Oid) ?>" method="post">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-secondary text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                                <div class="mb-md-5 mt-md-4 pb-5">
                                    <h2 class="fw-bold mb-2 text-uppercase">
                                        Please confirm your password
                                    </h2>
                                    <div class="form-outline form-white mb-4">
                                        <input type="password" name="password" class="form-control form-control-lg" />
                                        <label class="form-label" for="text">
                                            Password
                                        </label>
                                    <button class="btn btn-outline-light btn-lg px-5" type="submit" name="submit">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</body>

</html>
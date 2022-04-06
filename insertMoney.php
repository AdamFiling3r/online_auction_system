<?php
include_once "includes/connect.php";
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
    <title>Insert Money</title>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
</head>

<body class="bg-dark">
    <?php
    include_once "navbar.php";
    ?>

    <section class="insertMoney">
    <form class="vh-100 gradient-custom" enctype="multipart/form-data" action="includes/insertBalance.inc.php" method="post">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-secondary text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Insert money</h2>
              <p class="text-white-50 mb-5"></p>

              <div class="form-outline form-white mb-4">
              <input class="form-control form-control-lg" type="integer" name="balance" placeholder="10000">
              
              </div>
            </div>
            <button class="btn btn-outline-light btn-lg px-5" type="submit" name="submit">Submit</button>
            <div class="form-outline form-white mb-4">
              <?php
              if (in_array('negativeNum', $_SESSION["errors"])) {
                echo "<li>Insert positive value</li>";
              }
              if (in_array('notNum', $_SESSION["errors"])) {
                echo "<li>Insert numeric value</li>";
              }
              
              ?>
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
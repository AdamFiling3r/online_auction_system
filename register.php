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
    <title>Register</title>
</head>
<body class="bg-dark">

    <!-- Navbar -->

    <?php 
    include_once("navbar.php");
    ?>

    <!-- Register -->

    <form class="vh-100 gradient-custom" action="includes/register.inc.php" method="post">
        <div class="container py-5 h-200">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-secondary text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <div class="mb-md-5 mt-md-4">
      
                    <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                    <p class="text-white-50 mb-5">Please fill out the registration form!</p>
                    
                    <div class="form-outline form-white mb-4">
                        <input type="text" name="first_name" class="form-control form-control-lg" />
                        <label class="form-label" for="first_name">First name</label>
                      </div>

                    <div class="form-outline form-white mb-4">
                        <input type="text" name="last_name" class="form-control form-control-lg" />
                        <label class="form-label" for="last_name">Last name</label>
                      </div>

                    <div class="form-outline form-white mb-4">
                        <input type="text" name="username" class="form-control form-control-lg" />
                        <label class="form-label" for="username">Username</label>
                      </div>

                    <div class="form-outline form-white mb-4">
                        <input type="text" name="email" class="form-control form-control-lg" />
                        <label class="form-label" for="email">Email</label>
                      </div>

                      <div class="form-outline form-white mb-4">
                        <input type="password" name="password" class="form-control form-control-lg" />
                        <label class="form-label" for="password">Password</label>
                      </div>
      
                    <div class="form-outline form-white mb-4">
                      <input type="password" name="rep_password" class="form-control form-control-lg" />
                      <label class="form-label" for="password">Password again</label>
                      <!-- might change the for="" -->
                    </div>
      
                    <button class="btn btn-outline-light btn-lg px-5" type="submit" name="submit">Register</button>
      
      
                  </div>
      
                </div>
              </div>
            </div>
          </div>
        </div>
    </form>
</body>
</html>
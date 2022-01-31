<?php
require_once "includes/connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body class="bg-dark">

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3">
        <div class="container">
            <a href="index.php" class="navbar-brand">Online Auction Systems</a>

            <button 
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse" 
            data-bs-target="#navmenu"
            >
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="login.php" class="nav-link text-warning">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="register.php" class="nav-link text-success">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Register -->

    <section class="vh-100 gradient-custom" action="includes/register.inc.php" method="post">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-secondary text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <div class="mb-md-5 mt-md-4 pb-5">
      
                    <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                    <p class="text-white-50 mb-5">Please fill out the registration form!</p>
                    
                    <div class="form-outline form-white mb-4">
                        <input type="text" name="name" class="form-control form-control-lg" />
                        <label class="form-label" for="name">Full name</label>
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
      </section>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
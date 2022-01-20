
</head>
<body>
    <div class="container-fluid">
        <div id="nav">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#"><i class="bi bi-activity"></i></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="vision.php">Vision</a>
                      </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
        <?php
        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
          echo "<li class='nav-item'>";
          echo  htmlspecialchars($_SESSION["username"]);
          echo "</li>";
          echo "<li class='nav-item'>";
          echo "<a class='nav-link' href='reset-password.php'>Reset password</a>";
          echo "</li>";
          echo "<li class='nav-item'>";
          echo "<a class='nav-link' href='logout.php'>Logout</a>";
          echo "</li>";
          echo "<li class='nav-item'>
          <a class='nav-link' href='creatingForm.php'>Form</a>
        </li>";
        } else {
          echo "<li class='nav-item'>";
          echo "<a class='nav-link' href='register.php'>Register</a>";
          echo "</li>";
          echo "<li class='nav-item'>";
          echo "<a class='nav-link' href='login.php'>Login</a>";
          echo "</li>";
        }
        ?>

      </ul>
                  </div>
                </div>
              </nav>
              </div>
                </div>
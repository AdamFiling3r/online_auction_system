<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Index</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="creatingForm.php">Create new offer</a>
        </li>
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
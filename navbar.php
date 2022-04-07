<nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 border-bottom border-warning">
  <div class="container">
    <a href="index.php" class="navbar-brand">Online Auction Systems</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navmenu">
      <ul class="navbar-nav ms-auto">
        <?php
        if (isset($_SESSION["loggedin"])) {
          include_once("navbar_loged.php");
        }else{
          include_once("navbar_base.php");
        }
        
        ?>
      </ul>
    </div>
  </div>
</nav>
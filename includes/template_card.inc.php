<?php
include_once "DBPull.inc.php";
?>
<p><?php echo fread(fopen($_SESSION["result"][$y][1], "r"), filesize($_SESSION["result"][$y][1])); ?></p>
<img src="<?php echo $_SESSION["result"][$y][2]; ?>" alt="obrazek">
<p><?php echo $_SESSION["result"][$y][5] ?></p>
<p><?php echo date($_SESSION["result"][$y][6]) ?></p>
<br>
<?php
include_once "DBPull.inc.php";
?>
<p><?php echo fread(fopen($result[$y][1], "r"), filesize($result[$y][1])); ?></p>
<img src="<?php echo $result[$y][2]; ?>" alt="obrazek">
<p><?php echo $result[$y][5] ?></p>
<p><?php echo date($result[$y][6]) ?></p>
<br>
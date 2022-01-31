<?php
include_once "function.inc.php";

?>
<p><?php echo fread(fopen($result[$y][0], "r"), filesize($result[$y][0])); ?></p>
<img src="<?php echo $result[$y][1]; ?>" alt="obrazek">
<br>
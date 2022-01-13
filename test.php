<?php
$file = "test.txt";
$f = fopen($file, "w");
fputs($f, "hello world");

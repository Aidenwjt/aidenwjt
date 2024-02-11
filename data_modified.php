<?php
$file = $_SERVER["SCRIPT_NAME"];
$break = Explode('/', $file);
$pfile = $break[count($break) - 1];
echo "".date("d F Y \at g:ia",filemtime($pfile));
?>

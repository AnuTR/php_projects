<?php
$data = file_get_contents('https://en.wikipedia.org/wiki/PHP');
$myfile = fopen("Wiki-PHP.html", "w") or die("Unable to open file!");
fwrite($myfile, $data);
?>

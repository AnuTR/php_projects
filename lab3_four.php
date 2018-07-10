<?php
$url = 'http://www.w3resource.com/php-exercises/php-basic-exercises.php';
$url=parse_url($url);
echo 'Scheme : '.$url['scheme']."<br>\n";
echo 'Host : '.$url['host']."<br>\n";
echo 'Path : '.$url['path']."\n";
?>

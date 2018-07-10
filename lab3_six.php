<?php
$num=15;
$v="greater than 10";
$w="greater than 20";

$x="greater than 30";
$z=($num>10 && $num<20 ? $v : ($num>20 && $num<30 ? $w: $x));
echo $z;

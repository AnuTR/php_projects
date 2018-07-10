<?php
$input = '15-07-2015 09:30:00';
$date = strtotime(date("d-m-Y H:i:s", strtotime($input)) . " +1 week");
echo date("Y-m-d H:i:s",$date);
$date = strtotime(date("d-m-Y H:i:s", strtotime($input)) . " +1 month");
echo "<br>".date("Y-m-d H:i:s",$date);
$date = strtotime(date("d-m-Y H:i:s", strtotime($input)) . " +1 year");
echo "<br>".date("Y-m-d H:i:s",$date);
//date("Y-m-d H:i:s", 1388516401);
$date = strtotime(date("d-m-Y H:i:s", strtotime($input)) . " +10 days");
//echo "<br>".date("Y-m-d H:i:s",$date);
echo "<br>".date("m/d/Y",$date);
$date = strtotime(date("d-m-Y H:i:s", strtotime($input)) . " -3 days");
//echo "<br>".date("Y-m-d H:i:s",$date);
echo "<br>".date("d-m-Y",$date);
$date = strtotime(date("d-m-Y H:i:s", strtotime($input)) . " -1 month");
echo "<br>".date("Y-m-d H:i:s",$date);
//echo "<br>".date("d-m-Y",$date);



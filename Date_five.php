<?php
$date=date("Y-m-d H:i:s T");

echo $date;
date_default_timezone_set("Europe/London");
$date=date("Y-m-d H:i:s T");

echo "<br>".$date;
date_default_timezone_set("UTC");
$date=date("Y-m-d H:i:s T");

echo "<br>".$date;
date_default_timezone_set("America/Chicago");
$date=date("Y-m-d H:i:s T");

echo "<br>".$date;


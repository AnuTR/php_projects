<?php

$date=date_create("17-07-2015 17:07:28");
echo date_format($date,"Y/m/d H:i:s");
echo "<br>".date_format($date,"Y/m/d");
echo "<br>".date_format($date,"H:i A");
echo "<br>".date_format($date,"Y/m/d")." on ".date("l jS m Y");

<?php
$date1 = '17-03-2015 17:07:28'; 
$date2 = '07/04/2015 09:00:00'; 
$d=strtotime($date1);
$e=strtotime($date2);
echo "Created date is " . date("Y-m-d h:i:sa", $d)." and ".date("Y-m-d h:i:sa", $e);
if($d>$e) echo "<br>Latest Date is".$date1;
else echo "<br>Latest Date is".$date2;

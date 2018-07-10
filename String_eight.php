<?php
$cities=array(
"Itanagar",
"Dispur",
"Patna",
"Panaji",
"Raipur",
"Gandhinagar",
"Srinagar",
"Bangalore"
);
$a=sizeof($cities);
//for($i=0;$i<$a-1;$i++) echo $cities[$i].",";
echo implode(",",$cities);
//echo $cities[$a-1];
array_push($cities,"Thiruvananthapuram", "Bhopal", "Mumbai", "Bangalore", "Raipur");
sort($cities);
$cities=array_unique($cities);

echo "<br>After sort: ";
//$a=sizeof($cities);
//for($i=0;$i<$a-1;$i++) echo $cities[$i].",";
//echo $cities[$a-1];

echo implode(",",$cities);

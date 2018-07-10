<?php
$a=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
/*foreach ($a as $x=>$y)
{
ksort
}*/
echo "Sort by Keys: ";
ksort($a);
print_r($a);
asort($a);
echo "<br>Sort by values: ";
print_r($a);

echo "<br>Sort by Keys: Descending Order: ";
krsort($a);
print_r($a);
arsort($a);
echo "<br>Sort by values: Descending Order  ";
print_r($a);

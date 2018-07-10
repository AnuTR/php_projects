<?php

$color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
echo "Values in UpperCase: ";
foreach ($color as $x=>$y)
{
$color[$x]=strtoupper($y);
}
print_r($color);
echo "<br>Values in LowerCase: ";
foreach ($color as $x=>$y)
{
$color[$x]=strtolower($y);
}
print_r($color);

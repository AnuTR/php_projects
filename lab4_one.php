<?php
function AddNumbersUpto($num)
{
$sum=0;
for($i=0;$i<=$num;$i++) 
$s+=$i;
return $s;
}
echo AddNumbersUpto(30);

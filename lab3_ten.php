<?php
function PrintHiphenInBetween($num)
{
for($i=1;$i<=$num-1;$i++)
{
echo $i."-";
}
echo $num;
}
PrintHiphenInBetween(10);

<?php
function Count_r($string)
{
$i=strlen($string);
$k=0;
for($j=0;$j<$i;$j++)
{
if($string[$j]=="r") $k++;
}
return $k;
}
echo Count_r("phpresource");

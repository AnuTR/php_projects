<?php
function FirstDifference($str1,$str2)
{
$str_pos = strspn($str1 ^ $str2, "\0");
return $str_pos;
}
$a="football";
$b="footboll";
$a1=FirstDifference($a,$b);
echo "The two strings football and footboll differs at".$a1."position and different characters are \"".$a[$a1]."\" and \"".$b[$a1]."\"";


<?php
function CompareTwoString($s1,$s2)
{
$s=substr_compare($s1,$s2,0);
if($s==0) return "TRUE";
else return "FALSE";

}
$a="Hello World";
$b="Hello World";
$e=CompareTwoString($a,$b);
echo $e;

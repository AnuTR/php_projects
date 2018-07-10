<?php
$filename = 'my_upgrade(1).zip';
$match = 'myupgrade';
/*$a=strpos("my_upgrade(1).zip","my_upgrade");
if($a>=0) 
{
echo "BREAK HERE";
break;
echo "code after break";
}*/
$a=strpos($filename,$match);
//echo $a;
if($a==0)
{
echo "BREAK";
}

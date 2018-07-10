<?php
define('m',50);
echo m;
echo "<br>".constant('m');
echo "<br>".__LINE__;
echo "<br>".__FILE__;
echo "<br>".__CLASS__;
for ($i=1;$i<5;$i++)
{
echo "hi";
}
echo "<br>";
$arr=array(1,2,3);
foreach ($arr as $j)
{
echo "hi".$j;
echo "<br>";
if($j==2)break;
}
$a=array("m"=>2,"n"=>3);
echo $a['m']."<br>".$a['n']."<br>";
$a['m']="hi am anu ";
$a['n']="love my life";
echo $a['m']."<br>".$a['n']."<br>";
$n=array('a'=>array('a'=>array('a'=>2)));
echo $n['a']['a']['a'];
$s='hi';
echo "<br>";
print("hi ".$s);
echo "<br>";

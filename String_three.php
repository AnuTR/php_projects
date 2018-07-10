<?php
$text = "There is no installation needed to use these functions; they are part of the PHP core";
$pieces = explode(" ", $text);

$f1=0;
$f2=0;
$f3=0;
$f4=0;
$f5=0;
echo "Case Insensitive<br>";

foreach ($pieces as $w)
{
if(strcmp($w,"php")==0) $f1=1;
if(strcmp($w,"java")==0) $f2=1;

}
if($f1==1) echo "php: TRUE<br>";
else echo "php: FALSE<br>";

if($f2==1) echo "java: TRUE<br>";
else echo "java: FALSE<br>";

echo "Case Sensitive<br>";
foreach ($pieces as $w)
{
if(strcmp($w,"php")==0) $f3=1;
if(strcmp($w,"java")==0) $f4=1;
if(strcmp($w,"PHP")==0) $f5=1;
}
if($f3==1) echo "php: TRUE<br>";
else echo "php: FALSE<br>";

if($f4==1) echo "java: TRUE<br>";
else echo "java: FALSE<br>";
if($f5==1) echo "PHP: TRUE<br>";
else echo "PHP: FALSE<br>";


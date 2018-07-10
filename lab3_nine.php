<?php
function PalindromeCheck($string)
{
$rev=strrev($string);
if(strcmp($rev,$string)==0) echo "palindrom string";
else echo "not palindrom";
}
PalindromeCheck("malayalam");

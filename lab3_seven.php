<?php
function CalculateFactorial($num)
{
$f=1;
for($i=1;$i<=$num;$i++) $f*=$i;
return $f;
}
echo "Factorial of 5 is ".CalculateFactorial(5);

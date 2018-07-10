<?php

function PrimeCheck($num)
{
$f=0;
for($i=2;$i<$num/2;++$i)
{
if($num%$i==0) $f=1;
}
if($f==1) return "NotPrime";
else return "prime";

}
echo PrimeCheck(5);


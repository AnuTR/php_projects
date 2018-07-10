<?php
function get_leap($g)
{
if($g=="") throw new Exception("Sould enter valid date");



else {
if((int)$g%400==0)
{
echo "Leap Year";
}
elseif((int)$g%100==0)
{
echo "Leap Year";
}
elseif((int)$g%4==0)
{
echo "Leap Year";
}
else echo"Not Leap Year";
}
}

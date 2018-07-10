<?php

function CheckEndByCom($variable)
{
if(preg_match('/.com$/', $variable))
{
echo "YES";
}
}
CheckEndByCom("test@test.com");

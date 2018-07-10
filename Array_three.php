<?php
$color = array('white', 'green', 'red', 'blue', 'black');
unset($color[array_search('red',$color)]);
print_r($color);

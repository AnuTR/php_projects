<?php
function FirstOccurenceReplace($str)


{
echo "After: ".preg_replace('/the/', 'that', $str, 1);

}
echo "orginal string: 'the quick brown fox jumps over the lazy dog.'<br>";
FirstOccurenceReplace("the quick brown fox jumps over the lazy dog");

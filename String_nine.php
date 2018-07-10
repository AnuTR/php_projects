<?php
function GreaterThanFifty($num)
{
$arr=array();
foreach ($num as $b)
{
if($b<=50) array_push($arr,$b);

}
return $arr;
}
$studentMarks = array(
68, 70, 72, 49, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78,
68, 72, 73, 80, 34, 68, 72, 56, 23, 73, 45, 24, 85, 89, 83
);
sort($studentMarks);
$student=array(sizeof($studentMarks),array_sum($studentMarks)/sizeof($studentMarks),min($studentMarks),max($studentMarks),array_slice($studentMarks, sizeof($studentMarks)-5, 5, true),array_slice($studentMarks, 0, 5, true),array(GreaterThanFifty($studentMarks)));
print_r($student);

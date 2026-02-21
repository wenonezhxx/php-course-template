<?php
$name = "john";
echo strlen($name);
$steps = 12000;
if ($steps > 10000) {
    echo 'Цель выполнена';
}
$array = [8000, 12000, 9000];
//echo array_sum($array);

$sum=0;
foreach($array as $value){
    $sum = $sum + $value;
}
echo $sum;

$hasMembership = true;
if ($hasMembership) {
    echo 'Заходите в зал';
}
function isGoalReached(int $steps): bool 
{
    $result = false;
    if ($steps > 10000) {
        $result =  true;
    }

    return $result;
}
echo isGoalReached(12000);
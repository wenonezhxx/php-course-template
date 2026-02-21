<?php
$city = "rotterdam";
echo strtoupper($city);
$temperature = -5;
if ($temperature < 0) {
    echo 'Мороз';
}
$array = [5, -2, 3];
$sum= $count=0;
foreach($array as $value){
    $sum+=$value; 
   $count++;
}
echo $sum/$count;
$isRaining = true;
if ($isRaining) {
    echo 'Возьмите зонт';
}
function isCold (int $temperature): bool {
    if ($temperature < 0) {
        return true;
    } else {
        return false;
    }

}
echo isCold(-5);

?>
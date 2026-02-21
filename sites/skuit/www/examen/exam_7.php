<?php
$email = "student@gmail.com";
if (strpos($email, '@')) {
    echo 'есть собака';
}
$score = 85;
if ($score > 60) {
    echo 'сдал';
} else {
    echo 'не сдал';
}
$ocenki = [70, 80, 90];
$sum = 0;
$count = 0;
foreach ($ocenki as $ocenka) {
    $sum += $ocenka;
    $count ++;
}
$average = $sum / $count;
echo $average;
$hasHomework = false;
if ($hasHomework) {
    echo 'есть дз';
} else {
    echo 'нет дз';
}
function isPassed(int $score): bool {
    return $score > 60;
}
echo isPassed(75);
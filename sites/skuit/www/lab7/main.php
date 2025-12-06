<?php

function privetstvie($name) {
    echo "Привет, ".$name;
}
privetstvie("Антон и пхп <br>");

function proverka($number) {
    $result = "";
    if ($number % 2 == 0) {
        $result = "Четное<br>";
    } else {
        $result = "Нечетное<br>";
    }
    return $result;
}
echo proverka(rand(1, 100));

function zadanie2($number1, $number2) {
    $result = "";
    if ($number1 == $number2) {
        $result = "Они равны <br>";
    } elseif ($number1 > $number2) {
        $result = "Первое число больше: $number1 <br>";
    } elseif ($number1 < $number2) {
        $result = "Второе число больше: $number2 <br>";
    }
return $result;
}
echo zadanie2 (rand(1, 100), rand(1, 100));

function zadanie3($n) {
    $result = "";
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
    $sum += $i;
    }
    $result = "Полная сумма: $sum <br>";
    return $result;
}
echo zadanie3 (rand(10, 100));

function zadanie4($n) {
    $result = "";
    $array4 = [];
    for ($i = 0; $i < $n; $i++) {
        $array4[] = rand(-50, 50);
    }
    $positiveCount = 0;
    $negativeCount = 0;
    $zeroCount = 0;
    foreach ($array4 as $numb) {
    if ($numb > 0) {
        $positiveCount++;
    } elseif ($numb < 0) {
        $negativeCount++;
    } else {
        $zeroCount++;
    }
}
$result = "Количество положительных: $positiveCount <br>";
$result .= "Количество отрицательных: $negativeCount <br>";
$result .= "Количество нулей: $zeroCount <br>";
return $result;
}
echo zadanie4(10);

function zadanie5() {
    $result = "";
    $array5 = [];
for ($i = 0; $i < 10; $i++) {
    $array5[] = rand(-50, 50);
}
$min = $array5[0];
foreach ($array5 as $numbr) {
    if ($numbr < $min) $min = $numbr;
}
$result = "Минимальное значение: $min";
return $result;
}
echo zadanie5();


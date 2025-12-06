<?php
echo "Задание 1 <br>";
$number = rand(1, 100);
echo "Случайное число: $number <br>";
if ($number % 2 == 0) {
    echo "Четное <br>";
} else {
   echo "Нечетное <br>";
}
echo "Задание 2 <br>";
$number1 = rand(1, 100);
$number2 = rand(1, 100);
if ($number1 == $number2) {
    echo "Они равны <br>";
} elseif ($number1 > $number2) {
    echo "Первое число больше: $number1 <br>";
} elseif ($number1 < $number2) {
    echo "Второе число больше: $number2 <br>";
}
echo "Задание 3 <br>";
$n = rand(10, 100);
$sum = 0;
for ($i = 1; $i <= $n; $i++) {
    $sum += $i;
}
echo "Полная сумма: $sum <br>";
echo "Задание 4 <br>";
$array4 = [];
for ($i = 0; $i < 10; $i++) {
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
echo "Количество положительных: $positiveCount <br>";
echo "Количество отрицательных: $negativeCount <br>";
echo "Количество нулей: $zeroCount <br>";
echo "Задание 5 <br>";
$array5 = [];
for ($i = 0; $i < 10; $i++) {
    $array5[] = rand(-50, 50);
}
$min = $array5[0];
foreach ($array5 as $numbr) {
    if ($numbr < $min) $min = $numbr;
}
echo "Минимальное значение: $min";
?>
<?
declare(strict_types=1);
function printHelloWorld(): void 
{
    echo "Привет, мир!";
}
function getHelloWorld(): string 
{
    return "Привет, мир!";
}
$res = getHelloWorld();
echo $res;
$name = "валера";
function nameHelloWorld(string $name): void 
{
    echo "Привет, $name!";
}
function helloHelloWorld(string $name): string 
{
    return "Привет, $name!";
}
$hello = helloHelloWorld($name);
echo $hello;

function maxNumber(int | float $numb1, int | float $numb2, int | float $numb3): int | float 
{
    if ($numb1 >= $numb2 && $numb1 >= $numb3) {
        return $numb1;
    } elseif ($numb2 >= $numb1 && $numb2 >= $numb3) {
        return $numb2;
    } else {
        return $numb3;
    }
}
?>
<?php

function calculateTotal(float | int $price, int $count): float 
{
    return $price * $count;
}

$result1 = calculateTotal(100, 2);
$result2 = calculateTotal(50, 5);
$result3 = calculateTotal(200, 1);
$result4 = calculateTotal(75, 3);
$result5 = calculateTotal(150, 4);

echo "Итоговая сумма 1: " . $result1 . "\n";
echo "Итоговая сумма 2: " . $result2 . "\n";
echo "Итоговая сумма 3: " . $result3 . "\n";
echo "Итоговая сумма 4: " . $result4 . "\n";
echo "Итоговая сумма 5: " . $result5 . "\n";
?>
<?php

function isEven(int $number): bool
{
    return ($number % 2) == 0;
}

$randomNumber = rand(1, 100); 
$isCheck = isEven($randomNumber);

echo "Число: " . $randomNumber . "\n";
if ($isCheck) {
    echo "четное";
} else {
    echo "Не четное";
}
?>
<?php
function compare($a, $b) {
    if ($a > $b) {
        return "Число $a больше числа $b";
    } elseif ($a < $b) {
        return "Число $b больше числа $a";
    } else {
        return "Числа $a и $b равны";
    }
}
for ($i = 1; $i <= 5; $i++) {
    $result = compare(rand(1, 100), rand(1, 100));
    echo $result . "\n";
}
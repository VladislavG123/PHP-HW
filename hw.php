<?php
/* 
1. Заменить все знаки препирания в строке на точку.
2. Найти наименьшее число в массиве. Если элемент массива не число, то попытаться привести к числу.
3. Аналогично второй задаче. Найти наибольшее число.
4. Найти среднее значение всех элементов массива.
*/


// 1

$line = "Hello, world";

$line = str_replace(',', '.', $line);

echo $line;

//2
$arr = ['23', '1a', 3, 10, 1];

$min = (int)$arr[0];
foreach ($arr as $val) {
    $min = $min > (int)$val ? $val : $min;
}

echo " Min: " . $min;

//3

$max = (int)$arr[0];
foreach ($arr as $val) {
    $max = $max < (int)$val ? $val : $max;
}

echo " Max: " . $max;

// 4

$sum = 0;

foreach ($arr as $val) {
    $sum += $val;
}

echo " Avg: " . ($sum / count($arr));
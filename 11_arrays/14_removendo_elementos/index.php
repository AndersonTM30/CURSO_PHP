<?php

// Resgatar elementos de um array
// Remover elementos de um array

$arr = [1, 2, 3, 4, 5, 6];

$removidos = array_splice($arr, 1, 3);

print_r($arr);
echo PHP_EOL;

print_r($removidos);
echo PHP_EOL;

$arr2 = [1, 2, 3, 4, 5, 6];

$removidos2 = array_splice($arr2, 3);

print_r($arr2);
echo PHP_EOL;

print_r($removidos2);
echo PHP_EOL;

$arr3 = [1, 2, 3, 4, 5, 6];

$removidos3 = array_splice($arr3, 1, -1);

print_r($arr3);
echo PHP_EOL;

print_r($removidos3);
echo PHP_EOL;
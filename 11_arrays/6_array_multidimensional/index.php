<?php

$arr = [
    [1, 2, 3],
    [2, 5, 6]
];

print_r($arr) . PHP_EOL;

echo $arr[0][1] . PHP_EOL; # Acessando primeiro array, e segundo elemento

echo $arr[1][2] . PHP_EOL; # Acessando o segundo array, e último elemento

echo count($arr) . PHP_EOL;
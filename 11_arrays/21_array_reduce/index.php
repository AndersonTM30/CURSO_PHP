<?php

$arr = [1, 2, 4, 5, 33, 559, 30 , 6, 29];

function soma($a, $b)
{
    return $a + $b;
}

$resultado  = array_reduce($arr, 'soma');

echo "$resultado" . PHP_EOL;

function subtracao($a, $b)
{
    return $a - $b;
}

$resultado2  = array_reduce($arr, 'subtracao');

echo "$resultado2" . PHP_EOL;
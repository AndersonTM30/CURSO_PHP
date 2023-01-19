<?php

function soma($n1, $n2)
{
    return $n1 + $n2;
}

echo soma(4, 5) . PHP_EOL;

$x = soma(3, 5);

echo $x . PHP_EOL;

$y = soma($x, 15);

echo $y . PHP_EOL;
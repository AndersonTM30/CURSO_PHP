<?php

$dataA = new DateTime();
$dataB = new DateTime();

$dataB->setDate(2020, 10, 12);

print_r($dataA) . PHP_EOL;
print_r($dataB) . PHP_EOL;

$diferenca = $dataA->diff($dataB);

print_r($diferenca) . PHP_EOL;

echo $diferenca->format('%a days') . PHP_EOL;
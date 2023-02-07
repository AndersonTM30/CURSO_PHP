<?php

// data atual
$data = new DateTime();

echo $data->format('d/m/Y') . PHP_EOL;

echo $data->format('D - M - Y') . PHP_EOL;

echo $data->format('l - F - Y') . PHP_EOL;

// datas modificadas
$data->modify('+5 days');

echo $data->format('d/m/Y') . PHP_EOL;

$data->modify('+2 months');

echo $data->format('d/m/Y') . PHP_EOL;

$data->modify('-3 years');

echo $data->format('d/m/Y') . PHP_EOL;
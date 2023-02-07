<?php

$data = new DateTime();

print_r($data) . PHP_EOL;

$data->setDate(1999, 12, 01);

print_r($data) . PHP_EOL;

$data->setTime(05, 12, 10);

print_r($data) . PHP_EOL;

echo $data->format('d/m/Y') . PHP_EOL;
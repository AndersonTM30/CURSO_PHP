<?php

$arr = [
    'cor' => 'vermelho',
    'forma' => 'retângulo',
    'material' => 'aço'
];

$newArr = extract($arr);

echo "$cor" . PHP_EOL;
echo "$forma" . PHP_EOL;
echo "$material" . PHP_EOL;
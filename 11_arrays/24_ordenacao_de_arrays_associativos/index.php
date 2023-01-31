<?php

$arr = [
    'Icaro' => 25,
    'Anderson' => 30,
    'Nicole' => 26,
    'Ricardo' => 40
];

print_r($arr);

ksort($arr);

print_r($arr);

asort($arr);

print_r($arr);

krsort($arr);

print_r($arr);

arsort($arr);

print_r($arr);
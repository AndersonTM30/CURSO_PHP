<?php

$arr = range(1, 20);

print_r(array_chunk($arr, 4));
echo PHP_EOL;

$arrays = array_chunk($arr, 5);

print_r($arrays);
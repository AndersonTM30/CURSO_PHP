<?php

$arr = [1, 2, 3, 4, 5, 6];

$arrRev = array_reverse($arr);

print_r($arr);
echo PHP_EOL;
print_r($arrRev);

$arr2 = ['Anderson', 3, true, [1, 2]];

print_r($arr2);

print_r(array_reverse($arr2));
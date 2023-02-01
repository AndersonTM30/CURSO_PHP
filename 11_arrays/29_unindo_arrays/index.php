<?php

$arr = [1, 2, 4, 5, 6, 7];

$arr2 = [8, 9, 10, 30 , 50];

$arr3 = [23.5, 54.2, 605.2];

$arrMerge = array_merge($arr, $arr2, $arr3);

print_r($arrMerge);
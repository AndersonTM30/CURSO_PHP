<?php

/**
 * Crie um array multidimensional com 3 arrays que tem 4 elementos cada;
 * Imprima todos os elementos de cada um dos arrays;
 * Imprima também quando está mudando de array;
 */

 $arr = [
    [1, 2, 3, 4, 5],
    [6, 7, 8, 9, 10],
    [11, 12, 13, 14, 15]
 ];

for($i = 0; $i < count($arr); $i++){
    echo "Imprimindo array externo: " . ($i + 1) . PHP_EOL;

    for($j = 0; $j < count($arr[$i]); $j++) {
        echo $arr[$i][$j] . PHP_EOL;
    }
}
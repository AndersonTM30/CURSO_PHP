<?php

/**
 * Crie um array com número de 1 a 20;
 * Crie um loop for para este array;
 * Imprima apenas os pares;
 */

 $lista = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16 ,17, 18, 19, 20];

 for($i = 0; $i < count($lista); $i++) {
    if ($lista[$i] % 2 == 0) {
        echo $lista[$i] . PHP_EOL;
    }
 }
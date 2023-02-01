<?php

/**
 * Crie um array com a função range de 10 a 45;
 * Imprima todos os números com uma soma de 6;
 * Se passar de 30 a soma, imprima também que o número é muito alto;
 */

 $arr = range(10, 45);

 for($i = 0; $i < count($arr); $i++) {
    $arrayAtual = $arr[$i] += 6;
    if($arrayAtual > 30) {
        echo "O número $arrayAtual é muito alto" . PHP_EOL;
    } else {
        echo $arrayAtual . PHP_EOL;
    }
 }
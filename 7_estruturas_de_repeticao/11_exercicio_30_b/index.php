<?php

/**
 * Crie um array de 1 a 10;
 * Utilize o loop for  para criar este array;
 * Dica: Você pode utilizar o método arrya_push(arr, elemento) para inserir um elemento em um array;
 * Imprima o array criado com o print_r;
 */

 $lista = [];

 for($i = 0; $i < 10; $i++) {
    print_r(array_push($lista, $i) . PHP_EOL);
 }
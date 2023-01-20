<?php

/**
 * Crie uma função que recebe um array de números;
 * Crie um novo array com apenas os números que são maiores que 7;
 * Retorne este novo array e imprima na tela;
 */

 function arrayNumber()
 {
    $lista = [1,2,3,4,5,6,7,8,9,10];

    $novaLista = [];

    for ($i = 0; $i <= count($lista); $i++) {
        if($lista[$i] > 7) {
            array_push($novaLista, $i);
        }
    }
    print_r($novaLista);
 }

 arrayNumber();
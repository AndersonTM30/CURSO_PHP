<?php

/**
 * Crie uma função chamada defineCorCarro;
 * Onde há um parâmetro chamado cor, com o valor default de vermelho;
 * Retorne a cor do carro;
 * Imprima o retorno tanto com parâmetro default, como também definindo a cor;
 */

 function defineCorCarro($cor = "vermelho")
 {
    echo "A cor do carro é: $cor" . PHP_EOL;
 }

 defineCorCarro();
 defineCorCarro("verde");
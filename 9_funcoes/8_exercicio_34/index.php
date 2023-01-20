<?php

/**
 * Crie uma função que verifica se um número é par ou ímpar;
 * Se for par imprima uma mensagem;
 * Se for ímpar imprima uma mensagem referente;
 */

 function verificaSeEParOuImpar($num)
 {
    if(is_int($num)) {
        if($num % 2 == 0) {
            echo "O número $num é par" . PHP_EOL;
        } else {
            echo "O número $num é ímpar" . PHP_EOL;
        }
    } else {
        echo "Por favor informar um número inteiro válido!" . PHP_EOL;
    }
 }

 verificaSeEParOuImpar(40);
 verificaSeEParOuImpar(15);
 verificaSeEParOuImpar("teste");
 verificaSeEParOuImpar(23.4);
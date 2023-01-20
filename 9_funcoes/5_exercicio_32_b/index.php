<?php

/**
 * Crie uma função
 * Define uma variável nome e sobrenome;
 * Imprima os valores concatenados;
 */

 function mostraNomeESobrenome()
 {
    $nome = 'Anderson';
    $sobrenome = 'Ferreira';

    $nomeCompleto = "$nome $sobrenome";

    echo $nomeCompleto . PHP_EOL;
 }

 mostraNomeESobrenome();
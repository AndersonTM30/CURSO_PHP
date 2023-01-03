<?php

/*
    Crie variáveis com números e outras com string;
    Faça um if checando se é um número;
    Caso for, atribua a multiplicação deste número por 2 em outra variável;
    E crie um outro if, que checa se o novo número é maior que 100;
    Se sim, imprima uma mensagem;
*/

$a = 10.2;
$b = 15.3;
$nome = 'Anderson';
$nome2 = 'Roger';

if (is_float($a)) {
    $result = $a * 2;
    if($result > 100) {
        echo "Valor total: $result" . PHP_EOL;
    } else {
        echo "O valor é menor que 100, valor total: $result" . PHP_EOL;
    }
} else {
    echo "Por favor digite um número válido!" . PHP_EOL;
}

if (is_float($b)) {
    $result = $b * 2;
    if($result > 100) {
        echo "Valor total: $result" . PHP_EOL;
    } else {
        echo "O valor é menor que 100, valor total: $result" . PHP_EOL;
    }
} else {
    echo "Por favor digite um número válido!" . PHP_EOL;
}

if (is_float($nome)) {
    $result = $nome * 2;
    if($result > 100) {
        echo "Valor total: $result" . PHP_EOL;
    } else {
        echo "O valor é menor que 100, valor total: $result" . PHP_EOL;
    }
} else {
    echo "Por favor digite um número válido!" . PHP_EOL;
}

if (is_float($nome2)) {
    $result = $nome2 * 2;
    if($result > 100) {
        echo "Valor total: $result" . PHP_EOL;
    } else {
        echo "O valor é menor que 100, valor total: $result" . PHP_EOL;
    }
} else {
    echo "Por favor digite um número válido!" . PHP_EOL;
}
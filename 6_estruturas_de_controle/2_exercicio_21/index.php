<?php

/*
    Faça as seguintes verificações em estruturas if;
    5 é maior que 2?
    Matheus é diferente de Pedro?
    12 é menor ou igual a 11?
    Você deve inserir os valores em variáveis;
*/

$a = 5;
$b = 2;
$nome1 = 'Matheus';
$nome2 = 'Pedro';
$c = 12;
$d = 11;

if ($a > $b) {
    echo "Entrou no primeiro if" . PHP_EOL;
}

if ($nome1 !== $nome2) {
    echo "Entrou no segundo if" . PHP_EOL;
}

if ($c <= $d) {
    echo "Entrou no terceiro if" . PHP_EOL;
}
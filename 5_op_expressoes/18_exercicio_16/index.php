<?php

// Insira o valor 4 em uma variável, e o valor 2 em outra;
// Teste os operadores de: igualdade, diferenç, idêntico e não idêntico;

$a = 5;
$b = 3;

if($a == $b) {
    echo 'Os valores são iguais' . PHP_EOL;
}

if($a != $b) {
    echo 'Os valores são diferentes' . PHP_EOL;
}

if($a === $b) {
    echo 'Os valores são iguais e do mesmo tipo' . PHP_EOL;
}

if($a !== $b) {
    echo 'Os valores são diferentes até do seu tipo' . PHP_EOL;
}
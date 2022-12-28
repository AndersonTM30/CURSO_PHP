<?php

if(3 == 3) {
    echo "Comparação é verdadeira 1" . PHP_EOL;
}

if(3 == 4) {
    echo "Comparação é verdadeira 2" . PHP_EOL;
}

$a = 4;
$b = 4;
$c = 100;

if($a == $b) {
    echo "Comparação é verdadeira 3" . PHP_EOL;
}

if($a == $c) {
    echo "Comparação é verdadeira 4" . PHP_EOL;
}

$nome = 'Anderson';
$nomeSistema = 'Anderson';

if($nome == $nomeSistema) {
    echo 'Os nomes são iguais';
}
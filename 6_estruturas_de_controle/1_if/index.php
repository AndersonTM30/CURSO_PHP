<?php

if(5 > 2) {
    echo "Deu certro, entrou no if" . PHP_EOL;
}

if (2 >= 5) {
    echo "Não vai entrar no if, porue deu false!" . PHP_EOL;
}

if (10 === 10 && 9 > 3) {
    echo "Deu certro, entrou no if 2" . PHP_EOL;
}

$a = 10;
$b = 5;
$c = "Deu certo, entrou no if 3" . PHP_EOL;

if ($a >= $b) {
    echo $c;
}
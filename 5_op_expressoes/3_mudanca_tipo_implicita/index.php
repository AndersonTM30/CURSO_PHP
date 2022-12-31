<?php

if(is_float(5/2)) {
    echo 'É um float' . PHP_EOL;
}

if(is_string(5 . 2)) {
    echo 'É uma string' . PHP_EOL;
}

$nome = 'Anderson';

$sobrenome = 'Ferreira';

$nomeCompleto = $nome . ' ' . $sobrenome;

echo $nomeCompleto;
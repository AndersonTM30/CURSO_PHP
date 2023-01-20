<?php

$a = 10;
$b = 15;

function testeEscopo()
{
    $a = 5;

    $a++;
    global $b;

    $c = 0;

    $c++;

    echo "ESCOPO LOCAL DE A: $a" . PHP_EOL;
    
    echo "ESCOPO GLOBAL NA FUNÇÃO DE B: $b" . PHP_EOL;

    echo "ESCOPO LOCAL DE C: $c" . PHP_EOL;

}
echo "ESCOPO GLOBAL DE A: $a" . PHP_EOL;
echo "ESCOPO GLOBAL DE B: $b" . PHP_EOL;

testeEscopo();
testeEscopo();

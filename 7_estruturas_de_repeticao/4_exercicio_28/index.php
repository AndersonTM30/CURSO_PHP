<?php

/*
    Crie um Loop que vai até o número 30;
    O contador deve iniciar com o valor 4;
    Faça incrementos de 2 em 2 no contador;
    Utilize o break para parar o loop quando chegar no número 24;
*/

$x = 4;

while($x < 30) {
    echo $x . PHP_EOL;
    if ($x == 24) {
        echo "Finish Him" . PHP_EOL;
        break;
    }
    $x += 2;
}
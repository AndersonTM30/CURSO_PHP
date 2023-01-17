<?php

/*
    Crie um array com alguns valores (pelo menos 10) de tipos de dados diferentes;
    Faça um loop while para exibir apenas os dados que são strings;
*/

$lista = ['Anderson', 1, 20.3, false, 'Alisson', 'Marcyo', 30, true, 20, 'Gabriel'];

$x = count($lista);
$y = 0;

while($y < $x) {
    if(is_string($lista[$y])) {
        echo "$lista[$y]" . PHP_EOL;
    }

    $y++;
}
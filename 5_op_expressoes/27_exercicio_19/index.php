<?php

/*
    Converta os seguintes dados para int com o operador de cast;
    "testando"
    12.9
    true
    [1,2,3]
    E veja os resultados
*/

$a = (int) "testando";
$b = (int) 12.9;
$c = (int) true;
$d = (int) [1, 2, 3];

echo "Exemplos de Cast: \n A: $a \n B: $b \n C: $c \n D: $d";
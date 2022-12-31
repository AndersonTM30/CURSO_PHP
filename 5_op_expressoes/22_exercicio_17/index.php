<?php

/*
    Verifique as seguintes operações com AND;
    15 > 5 AND "João" === "João"
    "teste" > 5 AND 1
    2 == 3 AND 5 >= 3
*/

if(15 > 5 && "João" === "João") {
    echo "O resultado retornou verdadeiro" . PHP_EOL;
}

if("teste" > 5 && 1) {
    echo "O resultado retornou falso" . PHP_EOL;
}

if(2 == 3 && 5 >= 3) {
    echo "O resultado retornou falso" . PHP_EOL;
}
<?php
/* 
    Verifique as seguintes operações com OR;
    12 < 5 || "João" === "João"
    1 > 5 || 1
    20 === "20" || 51 >= 31
*/

if(12 < 5 || "João" === "João") {
    echo "Retornou pelo menos um verdadeiro 1" . PHP_EOL;
}

if(1 > 5 || 1) {
    echo "Retornou pelo menos um verdadeiro 2" . PHP_EOL;
}

if(20 === "20" && 51 >= 31) {
    echo "Retornou pelo menos um verdadeiro 3" . PHP_EOL;
}
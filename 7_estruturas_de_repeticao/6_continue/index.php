<?php

$a = 10;

while($a > 0) {
    if($a == 5 || $a == 7) {
        echo "Pulou a execução $a" . PHP_EOL;

        $a--;
        continue;
    }

    if($a == 2) {
        echo "Terminando o loop break $a" . PHP_EOL;
        break;
    }

    echo "Executando o loop break $a" . PHP_EOL;

    $a--;
}
<?php

$x = 0;

while($x < 10) {

    echo "O X é $x" . PHP_EOL;

    if($x == 5) {
        echo "Terminando o loop" . PHP_EOL;
        break;
    }
    $x++;
}
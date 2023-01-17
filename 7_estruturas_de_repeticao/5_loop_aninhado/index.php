<?php

$i = 0;

while($i < 10) {
    echo "Loop externo $i" . PHP_EOL;
    $j = 1;
    while($j <= 5) {
        echo "Loop interno $j" . PHP_EOL;

        $j++;
    }

    $i++;
}
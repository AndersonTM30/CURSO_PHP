<?php

if (10 > 2) {
    echo "Entrou no primeiro if" . PHP_EOL;
    if ('teste' == 'teste') {
        echo "Entrou no segundo if" . PHP_EOL;
    }
}

if (10 > 2) {
    echo "Entrou no primeiro if 2" . PHP_EOL;
    if ('teste' != 'teste') {
        echo "Entrou no segundo if 2" . PHP_EOL;
    } else {
        echo "Entrou no segundo else 2";
    }
}
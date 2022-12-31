<?php

if(5 > 10 && 10 > 5) {//false e true
    echo "O resultado é verdadeiro 1" . PHP_EOL;
}

if(5 < 10 && 10 > 5) {//true e true
    echo "O resultado é verdadeiro 2" . PHP_EOL;
}

if(5 < 10 && 10 < 5) {//true e false
    echo "O resultado é verdadeiro 3" . PHP_EOL;
}

if(5 > 10 && 10 < 5) {//false e false
    echo "O resultado é verdadeiro 4" . PHP_EOL;
}
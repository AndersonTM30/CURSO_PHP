<?php

$dataA = new DateTime();
$dataB = new DateTime();

$dataC = new DateTime();

$dataB->setDate(2023, 01, 11);

if($dataB > $dataA) {
    echo "A data B é maior que a data A" . PHP_EOL;
} 

if($dataA < $dataB) {
    echo "A data A é maior que a data B" . PHP_EOL;
} 

if($dataA == $dataC) {
    echo "As datas A e C são iguais" . PHP_EOL;
} 
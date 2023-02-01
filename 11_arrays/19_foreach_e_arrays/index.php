<?php

$anderson = [
    'nome' => 'Anderson',
    'idade' => 30,
    'profissao' => 'Programador'
];

$marta = [
    'nome' => 'Marta',
    'idade' => 30,
    'profissao' => 'Scrum Master'
];

foreach($anderson as $carac => $value) {
    echo "$carac: $value" . PHP_EOL;
}

foreach($marta as $value) {
    echo "$value" . PHP_EOL;
}
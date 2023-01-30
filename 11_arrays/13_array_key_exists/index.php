<?php

$arr = [
    'nome' => 'Anderson',
    'idade' => 29,

];

if(array_key_exists('nome', $arr)) {
    echo "A chave existe!" . PHP_EOL;
} else {
    echo "A chave não existe!" . PHP_EOL;
}

if(array_key_exists('profissao', $arr)) {
    echo "A chave existe!" . PHP_EOL;
} else {
    echo 'A chave não existe!' . PHP_EOL;
}

if(isset($arr['nome'])) {
    echo 'A chave existe! ISSET' . PHP_EOL;
} else {
    echo 'A chave não existe! ISSET' . PHP_EOL;
}

if(isset($arr['teste'])) {
    echo 'A chave existe! ISSET' . PHP_EOL;
} else {
    echo 'A chave não existe! ISSET' . PHP_EOL;
}
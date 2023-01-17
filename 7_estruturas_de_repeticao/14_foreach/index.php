<?php

$nomes = ['Anderson', 'João', 'Pedro', 'Maria'];

foreach($nomes as $nome) {
    echo "O nome do índice atual é $nome" . PHP_EOL;
    if($nome == 'Anderson') {
        echo "Opa, deu certo";
    }
}
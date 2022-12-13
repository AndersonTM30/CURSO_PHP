<?php

// crie um array associativo com características de uma pessoa;
// desafio: faça um if checando se ela é maior de idade e imprima uma mensagem, caso seja;

$pessoa = [
    'nome' => 'Anderson',
    'idade' => 30,
    'estadoCivil' => 'Casado',
    'temFilhos' => true
];

$nome = $pessoa['nome'];
$idade = $pessoa['idade'];
$estadoCivil = $pessoa['estadoCivil'];
$temFilhos = $pessoa['temFilhos'];

if($idade >= 18) {
    echo "O $nome é uma pessoa maior de dados pois tem $idade anos.";
} else {
    echo 'De menor';
}
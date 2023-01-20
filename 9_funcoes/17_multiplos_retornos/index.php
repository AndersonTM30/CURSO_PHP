<?php

function alteraDados($nome, $idade)
{
    $nome = "Sr $nome";
    $idade = "$idade anos";

    return [$nome, $idade];
}

$dados = alteraDados("Anderson", 30);

print_r($dados);
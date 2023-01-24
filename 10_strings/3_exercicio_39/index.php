<?php

/**
 * Crie uma função que recebe características de algum objeto como argumento (carro, sofá, cafeteira) em array associativo;
 * O array deve conter nome => preço;
 * Retorne apenas os itens que custam mais que R$10;
 * Imprima o retorno;
 */


$arr = [
    'motor' => 100,
    'porta' => 1000,
    'maçaneta' => 8
];

function imprimeItens($arr)
{
    $novaLista = [];

    foreach($arr as $item => $preco) {
        if($preco > 10) {
            array_push($novaLista, $item);
        }
    }
    return $novaLista;
}

$novoArr = imprimeItens($arr);
print_r($novoArr);
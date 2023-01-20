<?php

/**
 * Crie uma função que recebe um array de itens de supermercado;
 * Retorne este array em forma de string, separado em vírgulas;
 */

 function listaItens()
 {
    $lista = ['Arroz', 'Feijão', 'Macarrão', 'Farinha', 'Leite', 'Azeite', 'Carne', 'Ovo', 'Tomate', 'Tempero'];

    $result =  implode(', ', $lista);
    echo "Você levou os itens: $result.";
 }

 listaItens();
<?php

/*
    Crie uma variável que recebe uma velocidade de um carro;
    Depois crie uma nova estrutura if que verifica essa velocidade;
    Se a velocidade for menor que 40, imprima que o motorista está na velocidade correta;
    Se for igual a 40, imprima uma mensagem para o motorista tomar cuidade;
    Se for maior de 40, imprima uma mensagem de multa;
*/

function teste($valor) {
    if(is_int($valor)) {
        if($valor < 40) {
            echo "O motorista está na velocidade correta" . PHP_EOL;
        } else if ($valor == 40) {
            echo "Tome cuidado!" . PHP_EOL;
        } else if ($valor > 40) {
            echo "Multa" . PHP_EOL;
        }
    } else {
        echo "Informe um número válido" . PHP_EOL;
    }
}

teste(30);
teste(40);
teste(80);
<?php

function teste($valor)
{
    if(is_int($valor)) {
        if($valor < 5) {
            echo 'Entrou no if 1' . PHP_EOL;
        } else if($valor > 10) {
            echo 'Entrou no if 2' . PHP_EOL;
        }
    } else {
        echo "Por favor informe um valor inteiro" . PHP_EOL;
    }
}

teste(4);
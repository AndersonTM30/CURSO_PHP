<?php

function teste($valor)
{
    switch($valor) {
        case 0:
            echo "Valor é igual a 0" . PHP_EOL;
            break;
        case 1;
            echo "Valor é igual a 1" . PHP_EOL;
            break;
        default: 
            echo "Informe um valor válido" . PHP_EOL;
    }
}

teste(3);
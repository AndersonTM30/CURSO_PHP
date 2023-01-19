<?php

function velocidadeMaxima($vel)
{
    if(is_int($vel)) {
        echo "O carro atinge a velocidade máxima de $vel km/h" . PHP_EOL;
    } else {
        echo "Valor inválido!" . PHP_EOL;
    }
}

velocidadeMaxima(50);
velocidadeMaxima(100);
velocidadeMaxima(200);
velocidadeMaxima(250, 4);
velocidadeMaxima("teste");

function descreverAnimal($nome, $raca)
{
    echo "O $nome é da raça $raca" . PHP_EOL;
}

descreverAnimal('Bob', 'Vira Lata');
descreverAnimal('Shark', 'Pastor Alemão');
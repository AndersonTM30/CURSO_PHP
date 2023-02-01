<?php

/**
 * Crie um array com os seguintes valores: jaguar, 3.0, azul, 18, Teto Solar, automático
 * Chame este array de carro;
 * Crie variáveis com base neste array;
 */

 $carros = ['Jaguar', 3.0, 'Azul', 18, 'Teto Solar', 'Automático'];

 print_r($carros);
 echo PHP_EOL;

list($modelo, $potencia, $cor, $aro, $conversivel, $tipo) = $carros;

echo " Modelo: $modelo \n Potência: $potencia \n Cor: $cor \n Aro: $aro \n Conversível: $conversivel \n Tipo: $tipo";
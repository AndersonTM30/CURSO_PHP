<?php
// Crie um array com características de um carro e imprima duas das características

$carro = [
    'marca' => 'BMW',
    'ano' => 2022,
    'placa' => 'BMW4-035',
    'qtdPortas' => 4
];

echo "O carro do tipo ". $carro['marca'] . " do ano de " . $carro['ano'] . " e tem " . $carro['qtdPortas'] . " portas.";
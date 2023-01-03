<?php
/*
    Crie uma variável que recebe um peso;
    Caso seja maior que 80, imprima a mensagem que está
    pesado demais;
    Se não, imprima "Peso dentro do limite";
$*/

$peso = 70.0;
$pesoLimite = 80.0;

if(is_float($peso)) {
    if($peso > $pesoLimite) {
        echo "Pesado demais" . PHP_EOL;
    } else {
        echo "Peso dentro do limite" . PHP_EOL;
    }
} else {
    echo "Por favor informe um número inteiro" . PHP_EOL;
}
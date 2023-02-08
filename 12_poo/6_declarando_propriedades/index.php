<?php

class Car
{
    public $rodas = 4;
    public $aro = 20;
    public $cor = 'Vermelho';

    public function ligar()
    {
        echo 'Ligou' . PHP_EOL;
    }
}

$carro = new Car;

echo $carro->rodas . PHP_EOL;
echo $carro->aro . PHP_EOL;
echo $carro->cor . PHP_EOL;

$carro->ligar();
<?php

class Car
{
    public $portas;
    public $cor;
    public $marca;

    function __construct($portas, $cor, $marca)
    {
        $this->portas = $portas;
        $this->cor = $cor;
        $this->marca = $marca;
    }
}

$ferrari = new Car(4, 'Vermelha', 'Ferrari');

echo "O carro é da marcar $ferrari->marca e tem a cor $ferrari->cor" > PHP_EOL;

$bmw = new Car(4, 'Verde', 'BMW');

echo "O carro é da marcar $bmw->marca e tem a cor $bmw->cor" > PHP_EOL;

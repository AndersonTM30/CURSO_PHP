<?php

/**
 * Crie uma classe Car;
 * Instancie três objetos com esta classe;
 */

class Car
{
    public function businar()
    {
        echo "Bi-Bi" . PHP_EOL;
    }
}

$bmw = new Car;
$bmw->businar();

$fusca = new Car;
$fusca->businar();

$mustang = new Car;
$mustang->businar();
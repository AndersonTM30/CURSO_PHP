<?php

class Car 
{
    public $rodas = 4;
    private $vidro = "Sem película";
    protected $portas = 4;

    public function getVidro()
    {
        return $this->vidro;
    }

    public function getPortas()
{
    return $this->portas;
}}

class Mecanico
{
    public function alterarRodas($carro)
    {
        $carro->rodas = 10;
    }

    public function colocarPelicula($carro, $pelicula)
    {
        $carro->vidro = $pelicula;
    }
}

$carro = new Car;

echo $carro->rodas . PHP_EOL;

$anderson = new Mecanico;

$anderson->alterarRodas($carro);

echo $carro->rodas . PHP_EOL;

echo $carro->getVidro() . PHP_EOL;
echo $carro->getPortas() . PHP_EOL;
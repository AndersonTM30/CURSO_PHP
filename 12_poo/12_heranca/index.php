<?php

class Humano 
{
    public $idade = 30;

    public function falar()
    {
        echo "Olá Mundo" . PHP_EOL;
    }

    private function gritar()
    {
        echo 'AHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH' . PHP_EOL;
    }

    public function acessaGritar()
    {
        $this->gritar();
    }

    protected function falarBaixo()
    {
        echo "ahhhhhhhhhhhh" . PHP_EOL;
    }

    public function acessaFalarBaixo()
    {
        $this->falarBaixo();
    }
}

class Programador extends Humano
{

}

$anderson = new Humano;

$anderson->falar();
$anderson->acessaGritar();
$anderson->acessaFalarBaixo();

$ze = new Programador;

echo $anderson->idade . PHP_EOL;
$ze->falar();
$ze->acessaGritar();
$ze->acessaFalarBaixo();
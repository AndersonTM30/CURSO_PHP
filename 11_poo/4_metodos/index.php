<?php


class Pessoa
{
    public function falar()
    {
        echo "Olá, eu sou um objeto!" . PHP_EOL;
    }

    public function somar($a, $b)
    {
        echo $a + $b . PHP_EOL;
    }
}

$anderson = new Pessoa;

$anderson->falar();

$icaro = new Pessoa;
$icaro->falar();

$anderson->somar(2, 4);
$icaro->somar(20, 30);
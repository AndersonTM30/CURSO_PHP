<?php

interface Caracteristicas
{
    const nome = "Anderson";
    public function falar();
}

class Humano implements Caracteristicas
{
    public $idade = 30;

    public function falar()
    {
        echo "Olá mundo" . PHP_EOL;
    }

    public function dizerNome()
    {
        echo "Meu nome é " . self::nome . PHP_EOL;
    }
}

$anderson = new Humano;

$anderson->falar();
$anderson->dizerNome();
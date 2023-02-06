<?php

class Humano
{
    public const OLHOS = 2;
    public const BRACOS = 2;
    public const PERNAS = 2;

    function mostrarConstante()
    {
        echo self::BRACOS . PHP_EOL;
    }
}

$anderson = new Humano;

echo $anderson::OLHOS . PHP_EOL;
echo $anderson::PERNAS . PHP_EOL;
echo '-----------------' . PHP_EOL;

$anderson->mostrarConstante();
<?php

/**
 * Crie uma classe Cachorro;
 * Crie o método latir e andar;
 * Execute o método em novas instâncias da classe;
 */

 class Cachorro
 {
    public function latir()
    {
        echo "latindo" . PHP_EOL;
    }

    public function andar($m)
    {
        echo "O cachorro andou $m metros" . PHP_EOL;
    }
 }

$viraLata = new Cachorro;
$poodle = new Cachorro;

$viraLata->latir();
$viraLata->andar(10);

$poodle->latir();
$poodle->andar(100);
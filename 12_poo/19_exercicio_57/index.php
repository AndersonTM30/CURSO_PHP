<?php

/**
 * Crie uma classe Cachorro com propriedades;
 * Inicie as propriedades via construtor;
 * Crie um método para exibir cada uma das propriedades que você criou;
 */

class Cachorro
{
    public $raca;
    public $patas;

    public function __construct($raca, $patas)
    {
        $this->raca = $raca;
        $this->patas = $patas;
    }
}

$viraLata = new Cachorro("Vira-Lata", 4);

echo "O cachorro da raça $viraLata->raca e tem $viraLata->patas patas." . PHP_EOL;
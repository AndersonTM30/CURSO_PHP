<?php

/**
 * Crie uma classe Carro;
 * Crie algumas propriedades e também a propriedade velocidade_maxima;
 * Crie o método setVelocidadeMaxima, onde é possível alterar a velocidade máxima do carro;
 * Crie o método getVelocidadeMaxima, onde é possível imprimir a velocidade do carro;
 */

 class Carro
 {
    public string $modelo;
    public string $ano;
    public int $velocidadeMaxima;

    
    public function setVelocidadeMaxima($velocidadeMaxima)
    {
        return $this->velocidadeMaxima = $velocidadeMaxima;
    }
    
    public function getVelocidadeMaxima()
    {
        echo "A velocidade máxima é de $this->velocidadeMaxima km/h";
    }

    public function perfilCarro($modelo, $ano)
    {
        echo "Modelo: $modelo \nAno: $ano" . PHP_EOL;
    }
 }

$fusca = new Carro;

$fusca->perfilCarro('Fusca', '1989');

$fusca->setVelocidadeMaxima(110);

$fusca->getVelocidadeMaxima();

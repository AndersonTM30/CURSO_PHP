<?php

/**
 * Crie uma classe Humano com algumas propriedades e o método falar;
 * Crie uma outra classe Professor que herda de humano, crie também as
 * propriedades e método particulares desta classe;
 * Exiba os valores das propriedades da classse pai e também utilize os métodos;
 */

 class Humano{
    public $nome;
    public $idade;

    public function falar($nome, $idade)
    {
        echo "Olá, eu sou $nome e tenho $idade anos" . PHP_EOL;
    }
 }

 $anderson = new Humano;
 $anderson->falar('Anderson', 30);

 class Profissao extends Humano
 {
    public $profissao;

    public function cargo($profissao)
    {
        echo "Trabalho como $profissao";
    }
 }

 $matheus = new Profissao;
 $matheus->falar('Matheus', 29);
 $matheus->cargo('Programador');
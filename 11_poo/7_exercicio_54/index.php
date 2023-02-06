<?php

/**
 * Crie uma classe Pessoa;
 * Cria a propriedade nome e idade;
 * E também o método andar;
 */

class Pessoa
{
    public string $nome;
    public int $idade;

    public function andar($nome, $idade, $metros)
    {
        echo "Olá, eu sou $nome, tenho $idade anos e andei $metros metros para chegar até aqui!" . PHP_EOL;
    }
}

$pessoa = new Pessoa;

$pessoa->andar('Anderson', 30, 50);
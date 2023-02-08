<?php

Class Animal
{
    public $nome;

    public function escolherNome($nome)
    {
        $this->nome = $nome;
    }

    public function latir()
    {
        return "Au au" . PHP_EOL;
    }

    public function latirForte()
    {
        echo strtoupper($this->latir());
    }
}

$frida = new Animal;
echo "O nome do animal é: $frida->nome." . PHP_EOL;

$frida->escolherNome('Frida');

echo "O nome do animal é: $frida->nome." . PHP_EOL;

$frida->latir();

$frida->latirForte();
<?php

class Pessoa 
{
    
    public function falar()
    {
        echo 'Olá pessoal';
    }
}

$anderson = new Pessoa();

$anderson->nome = 'Anderson';

echo $anderson->nome;

echo '<br>';

$anderson->falar();
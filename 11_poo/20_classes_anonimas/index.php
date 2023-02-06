<?php

$pessoa = new class() {
    public $nome = 'Anderson';

    public function dizerNome(){
        echo "Olá meu nome é $this->nome" . PHP_EOL;
    }
};

echo $pessoa->nome . PHP_EOL;
$pessoa->dizerNome();
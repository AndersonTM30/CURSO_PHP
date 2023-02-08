<?php

class Humano
{
    public $idade;
    public $nome;
    public $profissao;

    public function falar(){}
    public function andar(){}
}

if(class_exists('Humano')){
    echo "A classe existe" . PHP_EOL;
}

if(class_exists('Cachorro')){
    echo "A classe existe" . PHP_EOL;
} else {
    echo "A classe não existe" . PHP_EOL;
}

print_r(get_class_vars('Humano'));
print_r(get_class_methods('Humano'));
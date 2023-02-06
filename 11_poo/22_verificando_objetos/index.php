<?php

class Humano{
    public function falar()
    {
        echo "Olá" . PHP_EOL;
    }
}

$anderson = new Humano;
$teste = 10;

if(is_object($anderson)) {
    echo "É um objeto" . PHP_EOL;
} else {
    echo "Não é um objeto" . PHP_EOL;
}   

if(is_object($teste)) {
    echo "É um objeto" . PHP_EOL;
} else {
    echo "Não é um objeto" . PHP_EOL;
}  

echo get_class($anderson) . PHP_EOL;

if(method_exists($anderson, 'falar')) {
    echo "Método existe" . PHP_EOL;
} else {
    echo "Método não existe" . PHP_EOL;
}  

if(method_exists($anderson, 'asd')) {
    echo "Método existe" . PHP_EOL;
} else {
    echo "Método não existe" . PHP_EOL;
}
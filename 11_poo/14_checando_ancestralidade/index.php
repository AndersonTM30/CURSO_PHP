<?php

class Humano
{

}

class Animal
{
    
}

class Professor extends Humano
{

}

$marcos = new Humano;

$gato = new Animal;

$pedro = new Professor;

if($marcos instanceof Humano){
    echo 'Marcos jé um humano' . PHP_EOL;
} else {
    echo "Marcos não é um humano" . PHP_EOL;
}

if($gato instanceof Humano){
    echo 'Gato é um Humano' . PHP_EOL;
} else {
    echo 'Gato não é um Humano' . PHP_EOL;
}

if($pedro instanceof Professor){
    echo 'Pedro jé um professor' . PHP_EOL;
} else {
    echo "Pedro não é um professor" . PHP_EOL;
}

if($pedro instanceof Humano){
    echo 'Pedro jé um humano' . PHP_EOL;
} else {
    echo "Pedro não é um humano" . PHP_EOL;
}
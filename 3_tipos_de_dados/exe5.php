<?php
// Imprima textos com aspas duplas e também com aspas simples;

$texto1 = 'Meu nome é Anderson';

$texto2 = "Minha idade é 30 anos";

if(is_string($texto1)) {
    echo $texto1 . "<br>";
}

if(is_string($texto2)) {
    echo $texto2 . "<br>";
}

if(is_string('teste')) {
    echo 'Se esta mensagem aparecer é porque o valor validado é do tipo string' . "<br>";
}
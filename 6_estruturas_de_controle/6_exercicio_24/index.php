<?php

/*
    Crie algumas variáveis com tipos de dados diferentes:
    string, int, boolean;
    Cheque se a variável é um inteiro;
    Caso sim, apresente uma mensagem confirmando o tipo de dado;
    Caso não, aprensente outra mensagem;
*/

$a = 'Anderson';
$b = 12;
$c = false;

if(is_int($a)) {
    echo "A variável $a é do tipo" . var_dump($a);
} else {
    echo var_dump($a);
}

if(is_int($b)) {
    echo var_dump($b);
} else {
    echo var_dump($b);
}

if(is_int($c)) {
    echo var_dump($c);
} else {
    echo var_dump($c);
}
<?php

$teste = 'Anderson';

echo "$teste é uma variável global <br>";

if($teste !== '') {
    $teste = 20;
    echo "$teste dentro do if <br>";
}

echo "$teste é uma variável global 2 <br>";

function impressao()
{
    $teste = 'lala';
    echo "$teste local <br>";
}

impressao();

function testandoGlobal()
{
    global $teste;
    echo "$teste é uma função global <br>";
}

testandoGlobal();
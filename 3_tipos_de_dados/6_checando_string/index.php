<?php

$texto = "Anderson";
$numero = 11;

if(is_string($texto)) {
    echo "$texto é uma string (1) <br>";
}

if(is_string($numero)) {
    echo "$numero é uma string (2) <br>";
}

if(is_string("texto")) {
    echo "É uma string (3) <br>";
}
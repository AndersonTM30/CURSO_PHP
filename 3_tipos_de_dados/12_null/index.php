<?php

echo null;

$nome = null;

if(is_null($nome)) {
    echo 'O valor é nulo! <br>';
}

$nome = 'Anderson';

if(is_null($nome)) {
    echo 'O valor é nulo! <br>';
} else {
    echo "A variável " . var_dump($nome) . "não é nulo!";
}
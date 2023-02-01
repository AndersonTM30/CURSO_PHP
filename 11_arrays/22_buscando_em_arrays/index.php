<?php

$arr = ['banana', 'maçã', 'batata', 'pêra', 'mamão'];

if(in_array('batata', $arr)){
    echo 'Há o item batata no array' . PHP_EOL;
} else {
    echo 'Não há batata no array' . PHP_EOL;
}
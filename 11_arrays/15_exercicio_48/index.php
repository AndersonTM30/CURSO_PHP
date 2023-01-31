<?php

/**
 * Crie um array com o valores: batata, maçã, pera, feijão, arroz;
 * Remova pera e feijão;
 */

 $arr = ['batata', 'maçã', 'pera', 'feijão', 'arroz'];

$novoArray = array_splice($arr, 2, 2);

print_r($novoArray);
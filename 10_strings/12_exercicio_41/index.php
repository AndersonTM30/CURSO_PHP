<?php

/**
 * Transforme a string "este item está em promoção"; em
 * "Este item está em PROMOÇÃO";    
 * Obs: você pode separa as strings, mas não pode escrever em caixa alta ou baixa manualmente, 
 * só com funções;
 */

 $palavra = "promoção";
 echo ucfirst("este item está em " . strtoupper($palavra));
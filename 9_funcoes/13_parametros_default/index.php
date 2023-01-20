<?php

function teste($a = "teste")
{
    echo "O valor de A é: $a" . PHP_EOL;
}

teste();
teste("asdg");

function testando($a, $b = "x")
{
    echo "O valor de a é : $a e o de b é: $b" . PHP_EOL;
}

testando("1");
testando("1", "2");
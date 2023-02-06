<?php

trait Objeto
{
    public function teste()
    {
        echo "Testando trait de objeto" . PHP_EOL;
    }
}

trait Testando
{
    public $y = 10;
    public function traitTeste()
    {
        echo "Este método é da trait Testando" . PHP_EOL;
    }
}

class Central
{
    use Objeto;
    use Testando;
}

$x = new Central;
$x->teste();
$x->traitTeste();
echo $x->y . PHP_EOL;
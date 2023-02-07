<?php

abstract class Shape
{
    abstract public function calculateArea();
}

class Square extends Shape
{
    private $side;

    public function __construct($side)
    {
        $this->side = $side;
    }

    public function calculateArea()
    {
        return $this->side * $this->side;
    }
}

$square = new Square(5);
echo $square->calculateArea();
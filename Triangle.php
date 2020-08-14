<?php

include_once 'Shape.php';

class Triangle extends Shape
{
    protected $side1;
    protected $side2;
    protected $side3;

    public function __construct($name, $color, $side1, $side2, $side3)
    {
        parent::__construct($name, $color);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function getSide1()
    {
        return $this->side1;
    }

    public function getSide2()
    {
        return $this->side2;
    }

    public function getSide3()
    {
        return $this->side3;
    }

    public function getPerimeter()
    {
        return $this->getSide1() + $this->getSide2() + $this->getSide3();
    }

    public function getArea()
    {
        $p = $this->getPerimeter() / 2;
        return sqrt($p * ($p - $this->getSide1()) * ($p - $this->getSide2()) * ($p - $this->getSide3()));
    }

    public function __toString()
    {
        return 'Day la hinh: ' . parent::getName() . ' , co mau: ' . parent::getColor() . ' , voi 3 canh la: ' . $this->getSide1() . ' , ' . $this->getSide2() . ' , ' . $this->getSide3() . ' co chu vi la: ' . $this->getPerimeter() . ' va dien tich la: ' . $this->getArea();
    }
}
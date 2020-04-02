<?php
abstract class Shape{
    abstract public function getArea();
}

class Square extends Shape{
    private $width, $height;
    public function __construct($x, $y)
    {
        $this->width=$x;
        $this->height=$y;
    }

    public function getArea()
    {
        return $this->width*$this->height;
    }
}
class Circle extends Shape{
    private $radius;

    public function __construct($r)
    {
        $this->radius=$r;
    }

    function getArea()
    {
        return pi()*$this->radius^2;
    }
}
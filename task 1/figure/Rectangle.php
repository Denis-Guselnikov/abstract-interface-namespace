<?php

namespace Rectangle;

require_once 'Figure.php';

use Figure\Figure;

class Rectangle extends Figure
{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function info()
    {
        echo 'Прямоугольник' . PHP_EOL;
    }

    public function square()
    {
        echo 'Площадь: ' . $this->a * $this->b . PHP_EOL;
    }

    public function perimeter()
    {
        echo 'Периметр: ' . ($this->a + $this->b) * 2 . PHP_EOL;
    }
}

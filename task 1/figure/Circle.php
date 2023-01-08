<?php

namespace Circle;

require_once 'Figure.php';

use Figure\Figure;

class Circle extends Figure
{
    private $pi = 3.14;
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function info()
    {
        echo 'Круг' . PHP_EOL;
    }

    public function square()
    {
        echo 'Площадь: ' . $this->pi * ($this->radius * $this->radius) . PHP_EOL;
    }

    public function perimeter()
    {
        echo 'Периметр: ' . 2 * $this->pi * $this->radius . PHP_EOL;
    }
}
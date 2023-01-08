<?php

namespace Triangle;

require_once 'Figure.php';

use Figure\Figure;

class Triangle extends Figure
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function info()
    {
        echo 'Треугольник' . PHP_EOL;
    }

    public function perimeter()
    {
        echo 'Периметр: ' . ($this->a + $this->b + $this->c) . PHP_EOL;
    }

    public function square()
    {
        $p = ($this->a+$this->b+$this->c) / 2;
        echo 'Площадь: ' .  sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
    }
}
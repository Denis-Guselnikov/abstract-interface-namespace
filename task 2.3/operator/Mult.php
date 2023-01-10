<?php

require_once 'interface.php';

class Mult implements \Operation2
{
    private int $a;
    private int $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function calculate(): int
    {
        return $this->a * $this->b;
    }
}

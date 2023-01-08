<?php

trait Mult
{
    private $a;
    private $b;

    public function mult()
    {
        echo $this->a * $this->b;
    }
}
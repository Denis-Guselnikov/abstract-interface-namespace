<?php

trait Minus
{
    private $a;
    private $b;

    public function minus()
    {
        echo $this->a - $this->b;
    }
}
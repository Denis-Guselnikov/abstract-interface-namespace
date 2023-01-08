<?php

trait Div
{
    private $a;
    private $b;

    public function div()
    {
        echo $this->a / $this->b;
    }
}
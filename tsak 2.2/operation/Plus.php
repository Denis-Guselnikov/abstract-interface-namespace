<?php

trait Plus
{
    private $a;
    private $b;

    public function plus()
    {
        echo $this->a + $this->b;
    }
}
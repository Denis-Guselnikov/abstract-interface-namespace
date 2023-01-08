<?php

require_once 'interface.php';

class Calculators implements Operations
{
    private int $firstNumber;
    private int $secondNumber;

    public function firstNumber($firstNumber): static
    {
        $this->firstNumber = $firstNumber;
        return $this;
    }

    public function secondNumber($secondNumber): static
    {
        $this->secondNumber = $secondNumber;
        return $this;
    }

    public function plus()
    {
        return $this->firstNumber + $this->secondNumber;
    }

    public function minus()
    {
        return $this->firstNumber - $this->secondNumber;
    }

    public function mult()
    {
        return $this->firstNumber * $this->secondNumber;
    }

    public function div()
    {
        return $this->firstNumber / $this->secondNumber;
    }

}
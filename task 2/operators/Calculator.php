<?php

namespace operators;

require_once 'Plus.php';
require_once 'Minus.php';
require_once 'Mult.php';
require_once 'Div.php';

class Calculator
{
    protected int $firstNumber;
    protected int $secondNumber;

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

    public function operation_plus($class): string
    {
        return Plus::plus($this->firstNumber, $this->secondNumber) . PHP_EOL;
    }

    public function operation_minus($class): string
    {
        return Minus::minus($this->firstNumber, $this->secondNumber) . PHP_EOL;
    }

    public function operation_mult($class): string
    {
        return Mult::mult($this->firstNumber, $this->secondNumber) . PHP_EOL;
    }

    public function operation_div($class): string
    {
        return Div::div($this->firstNumber, $this->secondNumber) . PHP_EOL;
    }
}

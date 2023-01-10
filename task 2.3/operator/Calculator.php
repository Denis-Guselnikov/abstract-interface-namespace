<?php

namespace operator;

require_once 'Plus.php';
require_once 'Minus.php';
require_once 'Mult.php';
require_once 'Div.php';

use Operation2;

class Calculator
{
    protected int $firstNumber;
    protected int $secondNumber;
    private Operation2 $operation;

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

    public function operation(string $operation): Calculator
    {
        $this->operation = new $operation($this->firstNumber, $this->secondNumber);
        return $this;
    }

    public function result()
    {
        return $this->operation->calculate();
    }
}
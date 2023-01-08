<?php

require_once 'Plus.php';
require_once 'Minus.php';
require_once 'Mult.php';
require_once 'Div.php';

class Calculator
{
    use Plus, Minus, Mult, Div;

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
}

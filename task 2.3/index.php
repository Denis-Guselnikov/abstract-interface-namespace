<?php

require_once 'operator/Calculator.php';

use operator\Calculator;

$calculator = new Calculator();
assert(
    $calculator->firstNumber(3)
        ->secondNumber(2)
        ->operation(Plus::class)
        ->result() == 5);

assert(
    $calculator->firstNumber(3)
        ->secondNumber(2)
        ->operation(Minus::class)
        ->result() == 1);

assert(
    $calculator->firstNumber(3)
        ->secondNumber(2)
        ->operation(Mult::class)
        ->result() == 6);

assert(
    $calculator->firstNumber(6)
        ->secondNumber(2)
        ->operation(Div::class)
        ->result() == 3);
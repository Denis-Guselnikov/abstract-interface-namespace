<?php

require_once 'operators/Calculator.php';

use operators\Calculator;

$calculator = new Calculator();

assert(
    $calculator->firstNumber(1)
        ->secondNumber(2)
        ->operation_plus(Plus::class) == 3);

assert(
    $calculator->firstNumber(3)
        ->secondNumber(2)
        ->operation_minus(Minus::class) == 1);

assert(
    $calculator->firstNumber(2)
        ->secondNumber(2)
        ->operation_mult(Mult::class) == 4);

assert(
    $calculator->firstNumber(2)
        ->secondNumber(2)
        ->operation_div(Div::class) == 1);

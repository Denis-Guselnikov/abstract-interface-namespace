<?php

require_once 'operation/Calculator.php';

$calculator = new Calculator();
$calculator->firstNumber(1)->secondNumber(2)->plus();
$calculator->firstNumber(1)->secondNumber(2)->minus();
$calculator->firstNumber(1)->secondNumber(2)->mult();
$calculator->firstNumber(1)->secondNumber(2)->div();
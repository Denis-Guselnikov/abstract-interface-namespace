<?php

require_once 'operations/Calculator.php';

$calculator = new Calculators();
assert($calculator->firstNumber(1)->secondNumber(2)->plus() == 3);
assert($calculator->firstNumber(3)->secondNumber(2)->minus() == 1);
assert($calculator->firstNumber(2)->secondNumber(2)->mult() == 4);
assert($calculator->firstNumber(6)->secondNumber(2)->div() == 3);
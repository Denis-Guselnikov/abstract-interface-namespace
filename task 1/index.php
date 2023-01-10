<?php

require_once 'figure/Rectangle.php';
require_once 'figure/Circle.php';
require_once 'figure/Triangle.php';

use Rectangle\Rectangle;
$rectangle = new Rectangle(2, 5);
$rectangle->info();
$rectangle->perimeter();
$rectangle->square();

use Circle\Circle;
$circle = new Circle(3);
$circle->info();
$circle->perimeter();
$circle->square();


use Triangle\Triangle;
$triangle = new Triangle(4, 5, 4);
$triangle->info();
$triangle->perimeter();
$triangle->square();
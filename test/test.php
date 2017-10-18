<?php
require_once __DIR__ . '/../vendor/autoload.php';

use redzjovi\calculator\Calculator;

$calculator = new Calculator();
$number = $calculator->plus(1, 2);

var_dump($number);
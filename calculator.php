<?php

use modelpkg\Calculator;

$view = new stdClass();  // empty basic object
$view->pageTitle = 'Calculator';
require_once('Models/Calculator.php');


if (isset ($_POST ['submit'])) {
    $calculator = new Calculator($_POST ['number1'] , $_POST ['number2'], $_POST ['operator']);
    $result = $calculator->calculate();
    if ($result === 'error') {
        $view -> result = 'Not a valid number';
    }
    else {
        $view -> result = $result;
    }
}

require_once('Views/calculator.phtml');
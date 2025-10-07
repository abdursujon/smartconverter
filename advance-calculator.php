<?php

use modelpkg\Calculator;

$view = new stdClass();  // empty basic object
$view->pageTitle = 'Advanced Calculator';
require_once('Models/Calculator.php');


if (isset ($_POST ['submit'])) {
    $calculator = new Calculator();
    $result = $calculator->calculateExpression($_POST['expression']);
    if ($result === 'error') {
        $view->result = 'Invalid expression. Please use the format (e.g., 5 * 5) with space before and after operator.' ;
    } else {
        $view->result = $result;
    }
}

require_once('Views/advance-calculator.phtml');
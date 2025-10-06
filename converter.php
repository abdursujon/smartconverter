<?php

use modelpkg\Converter;

$view = new stdClass();  // empty basic object
$view->pageTitle = 'Smart Converter';
require_once('Models/Converter.php');

if (isset ($_POST ['submit'])) {
    $converter = new Converter($_POST ['number'] , $_POST ['unit']);
    $result = $converter->convert();
    if ($result === 'error') {
        $view -> result = 'Not a valid number';
    }
    else {
        $view -> result = 'Conversion: '. $_POST['number']. ' ' . $_POST['unit'] .' is '. $result ;
    }
}

require_once('Views/converter.phtml');
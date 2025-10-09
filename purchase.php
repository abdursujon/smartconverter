<?php
session_start();

$view = new stdClass();
$view->pageTitle = 'Purchase Confirmation';

// Get item and cost from the query string
$item = isset($_GET['item']) ? htmlspecialchars($_GET['item']) : 'No item selected';
$cost = isset($_GET['cost']) ? htmlspecialchars($_GET['cost']) : '0.00';

require_once('Views/purchase.phtml');

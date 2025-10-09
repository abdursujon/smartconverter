<?php
session_start();

// If user is not logged in, redirect to the shop login page
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: shop.php");
    exit();
}

$view = new stdClass();
$view->pageTitle = 'Purchase Confirmation';

// Get item and cost from the POST data
$view->item = isset($_POST['item']) ? htmlspecialchars($_POST['item']) : 'No item selected';
$view->cost = isset($_POST['cost']) ? htmlspecialchars($_POST['cost']) : '0.00';

require_once('Views/buy.phtml');

<?php
session_start();

$view = new stdClass();
$view->pageTitle = 'Simple Shop';
$view->loginError = '';

// Hardcoded user credentials
define('USERNAME', 'admin');
define('PASSWORD', 'password');

// Handle login
if (isset($_POST['login'])) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] === USERNAME && $_POST['password'] === PASSWORD) {
            $_SESSION['loggedin'] = true;
            header("Location: shop.php");
            exit();
        } else {
            $view->loginError = 'Invalid username or password.';
        }
    }
}

// The view will now handle the product data
require_once('Views/shop.phtml');

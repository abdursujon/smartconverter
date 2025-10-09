<?php
session_start();

$view = new stdClass();
$view->pageTitle = 'Experimental Cookie Collection Using Session';
$view->errors = [];

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $dob = $_POST['dob'];

    // Validate name: check for numbers
    if (preg_match('/\d/', $name)) {
        $view->errors[] = 'Name cannot contain numbers.';
    }

    // Validate date of birth
    if (!empty($dob)) {
        $today = new DateTime();
        $dobDate = new DateTime($dob);
        $limitDate = (new DateTime())->sub(new DateInterval('P120Y'));

        if ($dobDate >= $today) {
            $view->errors[] = 'Date of birth must be in the past.';
        }
        if ($dobDate < $limitDate) {
            $view->errors[] = 'Date of birth cannot be more than 120 years in the past.';
        }
    } else {
        $view->errors[] = 'Date of birth is required.';
    }

    // If there are no errors, process the data
    if (empty($view->errors)) {
        $_SESSION['name'] = $name;
        $_SESSION['dob'] = $dob;
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}

require_once('Views/session-exercise.phtml');


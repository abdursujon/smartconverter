<?php
session_start();

// Unset all the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect back to the session exercise page
header("Location: session-exercise.php");
exit();

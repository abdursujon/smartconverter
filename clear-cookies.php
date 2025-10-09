<?php
// Set the expiration date to one hour in the past to delete the cookies
if (isset($_COOKIE['name'])) {
    unset($_COOKIE['name']);
    setcookie('name', '', time() - 3600, '/');
}
if (isset($_COOKIE['dob'])) {
    unset($_COOKIE['dob']);
    setcookie('dob', '', time() - 3600, '/');
}

// Redirect back to the experimental cookie page
header("Location: experimental-cookie.php");
exit();


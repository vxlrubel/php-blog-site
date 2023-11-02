<?php
// Start the session to work with it
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session data
session_destroy();

// Redirect the user to the login page or any other appropriate page
header('Location: login.php');
exit();
?>

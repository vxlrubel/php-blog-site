<?php
session_start();

// Define your username and password (you can replace these with a database check).
$valid_username = 'vxlrubel';
$valid_password = 'vxlrubel';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $entered_username = $_POST['username'];
    $entered_password = $_POST['password'];

    if ($entered_username === $valid_username && $entered_password === $valid_password) {
        // User is authenticated; set a session variable to indicate login.
        $_SESSION['authenticated'] = true;
        header('Location: index.php');
    } else {
        // Invalid credentials; redirect back to the login page.
        header('Location: login.php');
    }
} else {
    header('Location: login.php');
}
?>

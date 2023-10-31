
<?php
    
    session_start();

    require_once __DIR__ . '/core/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>webcome to home</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <div class="container">
    <?php

if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) {
    // User is authenticated; display the content here.
    echo "Welcome to the secure area!";

    echo '<a href="logout.php">login out</a>';
} else {
    // User is not authenticated; redirect to the login page.
    header('Location: login.php');
}









echo Users::get_username(1);



?>

    
        
        
    </div>
    
</body>
</html>

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


<header class="clearfix">
    <div class="container">
        <ul>
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="blog.php">blog</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="portfolios.php">Portfolios</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </div>
</header>

<!-- cleate header space -->
<div class="space"></div>
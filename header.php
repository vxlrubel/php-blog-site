
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
        <div class="menu-parent">
            <ul>
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="blog">blog</a></li>
                <li><a href="service">Service</a></li>
                <li><a href="portfolio">Portfolios</a></li>
                <li><a href="about">About</a></li>
                <li><a href="contact">Contact</a></li>

            </ul>
            <ul>
                <li class="has-submenu">
                    <a href="#">My Account</a>
                    <div class="submenu">
                        <a href="register">Register</a>
                        <a href="view-profile">View Profile</a>
                        <a href="edit-profile">Edit Profile</a>
                        <?php 
                            if( Users::is_user_logged_in() ){
                                printf( '<a href="%s">%s</a>', 'signout', 'Signout' );
                            }else{
                                printf( '<a href="%s">%s</a>', 'login', 'Login' );
                            }
                        ?>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>

<!-- cleate header space -->
<div class="space"></div>
<?php

// set hostname
$hostname = 'localhost';

// set database name
$db_name   = 'phpblog';

// set database user
$username = 'root';

// set user password
$password = '';

// set table prefix
$prefix = 'app_';

// set table name
$users = "{$prefix}users";
$posts = "{$prefix}posts";

try {
    $app = new PDO("mysql:host=$hostname;dbname=$db_name", $username, $password);
    // set the PDO error mode to exception
    $app->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $users_table = $app->query("SHOW TABLES LIKE '$users'");

    $posts_table = $app->query("SHOW TABLES LIKE '$posts'");

    // check user table is not exists
    if( $users_table->rowCount() == 0 ){

        // create user table sql
        $create_users_table = "CREATE TABLE $users (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            f_name VARCHAR(15) NOT NULL,
            l_name VARCHAR(20),
            username VARCHAR(20) NOT NULL UNIQUE,
            phone VARCHAR(12) UNIQUE,
            email VARCHAR(30) NOT NULL UNIQUE,
            role VARCHAR(20) DEFAULT 'subscriber',
            password VARCHAR(255) NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

        )";
        // create user table
        $app->exec( $create_users_table );
    }

    if( $posts_table->rowCount() == 0 ){
        $create_posts_table = "CREATE TABLE $posts(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            post_title VARCHAR(255) NOT NULL,
            post_desc TEXT NOT NULL,
            post_status VARCHAR(10) DEFAULT 'publish',
            post_type VARCHAR(5) NOT NULL DEFAULT 'post',
            post_author INT(6) NOT NULL,
            post_password VARCHAR(20),
            post_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        $app->exec( $create_posts_table );
    }
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


// requite all the functions

require_once __DIR__ . '/class-users.php';

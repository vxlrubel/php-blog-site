<?php

session_start();

require_once __DIR__ . '/config.php';

$username = $_POST['username'];

$password = $_POST['password'];

Users::login( $username, $password  );

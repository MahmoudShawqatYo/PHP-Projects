<?php 

    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'simple_blog');

    function connect() {
        $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
        return $connection;
    }
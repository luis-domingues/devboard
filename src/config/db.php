<?php 
    $user = 'root';
    $password = '';
    $database = 'devboard';
    $host = 'localhost';

    $mysqli = new mysqli($host, $user, $password, $database);

    if ($mysqli->error) {
        die ("Failed to connect to database " . $mysqli->error);
    }
?>
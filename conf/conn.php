<?php

$host = 'localhost';  // Replace with your database host
$username = 'root';  // Replace with your database username
$password = '';  // Replace with your database password
$database = 'cadetshop';  // Replace with your database name

// Create a connection to the database
$connection = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$connection) {
    die('Database connection failed: ' . mysqli_connect_error());
}

// Set the character set to utf8
mysqli_set_charset($connection, 'utf8');

?>

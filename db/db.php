<?php
// Database connection settings
$hostname = '127.0.0.1';
$username = 'root';
$password = 'example';
$database = 'iphonebooking';

// Create a database connection
$connection = mysqli_connect($hostname, $username, $password, $database, 3306);

if (!$connection) {
    die('Database connection failed: ' . mysqli_connect_error());
}
?>
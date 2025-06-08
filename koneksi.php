<?php
// Create a mysqli connection
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'sarana_prasarana';
$link = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$link) {
    die('Connection error: ' . mysqli_connect_error());
}

// Select the database
mysqli_select_db($link, 'sarana_prasarana');

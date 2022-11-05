<?php

// Connection Information split into 4 variables
$host = "localhost";
$username = "root";
$password = "usbw";
$database_in_use = "test";

// $mysqli = new mysqli("localhost", "user", "password", "database");
// Create a database connection instance
$mysqli = new mysqli($host, $username, $password, $database_in_use);

?>
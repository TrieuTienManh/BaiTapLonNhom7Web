<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "btl";

// Kết nối Database Server
$db = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
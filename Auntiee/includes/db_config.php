<?php
// db_config.php
$host = "localhost";
$dbname = "Adv";
$username = "root";
$password = "";

// Create and return database connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>

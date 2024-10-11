<?php
// Database connection settings
$servername = "localhost";
$dbname = "bcas";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
// Database connection details
$servername = "localhost"; // Change if necessary
$db_username = "root"; // Change if necessary
$db_password = ""; // Change if necessary
$dbname = "olws"; // Change to your database name

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    // If connection failed
    die("Connection failed: " . $conn->connect_error);
}
?>

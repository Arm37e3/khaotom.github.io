<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "khaotom";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Perform your database operations here

// Close the connection
$conn->close();
?>

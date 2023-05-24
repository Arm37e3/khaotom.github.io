<?php
$hostname = "localhost"; ;
$db_username = "root";
$db_password = "";
//$db_address = "";
$database = "khaotom";

// Create a connection
$conn = mysqli_connect($hostname, $db_username, $db_password,$database);
// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Perform your database operations here

// Close the connection
$conn->close();
?>

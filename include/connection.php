<?php
// Database credentials
$host = 'localhost';    // Server hostname or IP
$username = 'root';      // Your database username
$password = '';          // Your database password
$dbname = 'homecare';    // Your database name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "";
?>

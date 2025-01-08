<?php
$servername = "localhost";  // Host of the database (usually localhost)
$username = "root";         // MySQL username (default is root)
$password = "";             // MySQL password (default is empty for XAMPP)
$dbname = "admin_panel";    // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

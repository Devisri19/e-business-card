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
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert into database
    $sql = "INSERT INTO admins (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Admin registered successfully.";
        header('Location: adminlogin.php'); // Redirect to login page after successful registration
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Register</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="container">
        <div class="register-box">
            <h2>Register</h2>
            <form method="POST" action="">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                <br>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <br>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <br>
                <button type="submit">Register</button>
            </form>
        </div>
    </div>
</body>
</html>

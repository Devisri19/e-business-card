<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}

include('db_connection.php');

// Add new user
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Hash the password before storing
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert the new user into the database
    $query = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $username, $hashed_password, $email);

    if ($stmt->execute()) {
        echo "User added successfully!";
        header("Location: admin_dashboard.php");
        exit();
    } else {
        echo "Error adding user.";
    }
}

$conn->close();
?>

<form method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br>
    
    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <input type="submit" name="submit" value="Add User">
</form>

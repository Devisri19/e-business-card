<?php
session_start();
include('db.php'); // Include database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the admin exists
    $sql = "SELECT * FROM admins WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Admin found, verify password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['admin_id'] = $row['id'];
            $_SESSION['admin_email'] = $row['email'];
            header('Location: dashboard.php'); // Redirect to admin dashboard after successful login
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "No admin found with that email.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h2>Login</h2>
            <form method="POST" action="">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <br>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <br>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>

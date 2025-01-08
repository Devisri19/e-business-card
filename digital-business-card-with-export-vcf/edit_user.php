<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}

include('db_connection.php');

// Check if user ID is passed
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // Fetch the user details from the database
    $query = "SELECT * FROM users WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
    } else {
        echo "User not found.";
        exit();
    }
} else {
    echo "No user ID specified.";
    exit();
}

// Update the user record when the form is submitted
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];

    $update_query = "UPDATE users SET username = ?, email = ? WHERE id = ?";
    $stmt = $conn->prepare($update_query);
    $stmt->bind_param("ssi", $username, $email, $user_id);

    if ($stmt->execute()) {
        echo "User updated successfully!";
        header("Location: admin_dashboard.php");
        exit();
    } else {
        echo "Error updating user.";
    }
}

$conn->close();
?>

<form method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" value="<?= $user['username']; ?>" required><br>
    
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?= $user['email']; ?>" required><br>

    <input type="submit" name="submit" value="Update User">
</form>

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

    // Delete the user from the database
    $query = "DELETE FROM users WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $user_id);

    if ($stmt->execute()) {
        echo "User deleted successfully!";
        header("Location: admin_dashboard.php");
        exit();
    } else {
        echo "Error deleting user.";
    }
} else {
    echo "No user ID specified.";
    exit();
}

$conn->close();
?>

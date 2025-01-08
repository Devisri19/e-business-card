<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - User Login Records</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }
    table, th, td {
      border: 1px solid black;
    }
    th, td {
      padding: 8px;
      text-align: left;
    }
  </style>
</head>
<body>

  <h1>User Login Records</h1>
  
<?php
// Fetch login records
$query = "SELECT u.username, ul.login_time, ul.ip_address 
          FROM user_logins ul
          JOIN users u ON ul.user_id = u.id
          ORDER BY ul.login_time DESC";  // Display the latest logins first
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Display records
    echo "<table>";
    echo "<tr><th>Username</th><th>Login Time</th><th>IP Address</th></tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['login_time'] . "</td>";
        echo "<td>" . $row['ip_address'] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "No login records found.";
}

$conn->close();

  ?>
  <?php
  // Assuming the user is logged in and their user_id is known
session_start();
$user_id = $_SESSION['user_id'];  // The logged-in user's ID
$ip_address = $_SERVER['REMOTE_ADDR'];  // Get the user's IP address

// Database connection
$conn = new mysqli('localhost', 'username', 'password', 'users_db ');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert login record into the database
$query = "INSERT INTO user_logins (user_id, ip_address) VALUES (?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("is", $user_id, $ip_address);  // 'i' for integer, 's' for string
$stmt->execute();

$stmt->close();
$conn->close();
?>
  
</body>
</html>

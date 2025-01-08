<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMbZhN6O8fRfFjwEAq6LvXTJ91HD4Jb8HPC3JzR" crossorigin="anonymous">
</head>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .sidebar {
      height: 100vh;
      background-color: #343a40;
      color: #fff;
    }
    .sidebar a {
      color: #ddd;
      text-decoration: none;
      padding: 10px 15px;
      display: block;
      transition: background-color 0.3s;
    }
    .sidebar a:hover {
      background-color: #495057;
    }
    .sidebar .active {
      background-color: #007bff;
    }
    .content {
      margin-left: 250px;
      padding: 20px;
    }
    .navbar {
      margin-left: 250px;
    }
  </style>
</head>
<body>
  <div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar p-3">
      <h4 class="text-center">Admin Panel</h4>
      <a href="#dashboard" class="active"><i class="fas fa-home"></i> Dashboard</a>
      <a href="index.php"><i class="fas fa-users"></i> Users</a>
      <a href="#posts"><i class="fas fa-file-alt"></i> Posts</a>
      <a href="#settings"><i class="fas fa-cogs"></i> Settings</a>
      <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <!-- Main Content -->
    <div class="flex-grow-1">
      <!-- Top Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <button class="btn btn-outline-secondary" id="toggleSidebar">☰</button>
          <div class="ms-auto">
            <span><h5><i class="fas fa-user"></i>Welcome,<?php echo $_SESSION['user']; ?></h5>
            </span>
           <a href="logout.php"><center><i class="fas fa-sign-out-alt"></i>Logout</center></a>
          
        </div>
        </div>
      </nav>

      <!-- Dashboard Content -->
      <div class="content">
        <h1>Dashboard</h1>
        <div class="row">
          <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
              <div class="card-body">
                <h5 class="card-title">Users</h5>
                <p class="card-text">Manage registered users.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
              <div class="card-body">
                <h5 class="card-title">Posts</h5>
                <p class="card-text">Manage website content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
              <div class="card-body">
                <h5 class="card-title">Settings</h5>
                <p class="card-text">Configure application settings.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
              <div class="card-body">
                <h5 class="card-title">Logout</h5>
                <p class="card-text">Exit the admin panel.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
 
  <?php
session_start();

// Check if the admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: adminlogin.php");
    exit();
}

include('db_connection.php'); // Include your database connection file

// Fetch users from the database
$query = "SELECT * FROM users";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['username'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>
                    <a href='edit_user.php?id=" . $row['id'] . "'>Edit</a> | 
                    <a href='delete_user.php?id=" . $row['id'] . "'>Delete</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No users found.";
}

$conn->close();
?>


</body>
</html>

</body>
</html>

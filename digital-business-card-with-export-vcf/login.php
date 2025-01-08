<?php
    session_start();
    
    $servername = "localhost";
    $username = "root"; // Adjust with your DB username
    $password = ""; // Adjust with your DB password
    $dbname = "users_db";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST['username'];
        $pass = $_POST['password'];
    
        // Prevent SQL injection by using prepared statements
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($pass, $row['password'])) {
                $_SESSION['username'] = $user;
                echo "Login successful!";
                header("Location: card.php");
            } else {
                echo "Invalid password!";
            }
        } else {
            echo "No user found with that username!";
        }
    
        $stmt->close();
    }
    
    $conn->close();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
   <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 55%, #fbc2eb 100%);
            animation: backgroundAnimation 10s infinite alternate;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        @keyframes backgroundAnimation {
            0% { background: linear-gradient(135deg, #ff9a9e, #fad0c4, #fbc2eb); }
            100% { background: linear-gradient(135deg, #a1c4fd, #c2e9fb, #b2f7ef); }
        }

        .login-container {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1.5s ease-in-out;
            width: 100%;
            max-width: 400px;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: 600;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #5c6bc0;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.3s;
        }

        button:hover {
            background-color: #3f51b5;
            transform: scale(1.05);
        }

        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #5c6bc0;
            text-decoration: none;
            transition: color 0.3s;
        }

        a:hover {
            color: #3f51b5;
            text-decoration: underline;
        }

        /* Modal Styling */
        .modal {
            display: none;
            position: fixed;
            z-index: 1050;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
        }

        .modal-content {
            background-color: white;
            margin: 10% auto;
            padding: 20px;
            border-radius: 15px;
            width: 90%;
            max-width: 400px;
            text-align: center;
            animation: modalFadeIn 0.5s ease-in-out;
        }

        @keyframes modalFadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover {
            color: black;
        }
    </style>
    <script>
        function openModal() {
            document.getElementById('modal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('modal').style.display = 'none';
        }
    </script>
</head>
<body>
    <div class="login-container">
        <form action="login.php" method="POST" class="login-form">
            <h2>Login</h2>
            <div class="mb-3">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">  Login</button>
            <a href="#" onclick="openModal()">Forgot Password?</a>
            <a href="register.php">Register</a>
        </form>
    </div>

    <!-- Modal for Forgot Password -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Reset Password</h2>
            <div class="mb-3">
                <input type="email" class="form-control" placeholder="Enter your email" required>
            </div>
          
            <button class="btn btn-success">Submit</button>
            
        </div>
    </div>

    <!-- Bootstrap JS -->
  


   
     
</body>
</html>

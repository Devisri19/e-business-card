<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(135deg, #a18cd1, #fbc2eb, #fad0c4, #ff9a9e);
            background-size: 300% 300%;
            animation: gradientBG 10s ease infinite;
            font-family: 'Arial', sans-serif;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .logout-container {
            max-width: 400px;
            margin: 10% auto;
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            animation: fadeIn 1s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .logout-container h2 {
            margin-bottom: 1.5rem;
            color: #333;
        }

        .btn {
            background: #6c63ff;
            color: #fff;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #5753d9;
        }

        .btn-logout {
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <div class="logout-container">
        <h2>You have been logged out</h2>
        <p>Thank you for visiting! Click below to return to the login page.</p>
        <a href="index.php" class="btn btn-logout">Go to Login</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
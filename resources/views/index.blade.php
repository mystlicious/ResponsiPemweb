<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Light grey background */
        }
        .welcome-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full viewport height */
        }
        .welcome-content {
            text-align: center;
            max-width: 400px; /* Limit content width */
            padding: 20px;
            background-color: #fff; /* White background */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1); /* Soft shadow */
        }
        .welcome-content h1 {
            font-size: 2.5rem; /* Larger font size */
            margin-bottom: 20px;
        }
        .welcome-content p {
            font-size: 1.1rem; /* Medium font size */
            margin-bottom: 30px;
        }
        .welcome-content .btn {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <!-- Main Content -->
    <div class="welcome-container">
        <div class="welcome-content">
            <h1>Hi There!</h1>
            <p>Welcome to my WEB. This is a simple ogin or register to continue.</p>
            <a href="/login" class="btn btn-primary">Login</a>
            <a href="/register" class="btn btn-secondary">Register</a>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

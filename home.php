<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");				
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Your custom CSS -->
    <style>
        /* Your custom styles */
        body {
            background-color: #f3f3f3; /* Light lavender background */
            font-family: 'Arial', sans-serif;
            color: #333;
            text-align: center;
            padding-top: 80px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        .btn {
            padding: 15px 30px;
            font-size: 20px;
            border-radius: 30px;
            margin-top: 20px;
        }
        .btn-login {
            background-color: #6a5acd; /* Lavender blue */
            color: #fff;
            border: none;
            transition: transform 0.3s ease-in-out;
        }
        .btn-login:hover {
            transform: scale(1.1);
        }
        .btn-register {
            background-color: #7b68ee; /* Medium lavender */
            color: #fff;
            border: none;
            transition: transform 0.3s ease-in-out;
        }
        .btn-register:hover {
            transform: scale(1.1);
        }
        .logo {
            font-size: 60px;
            color: #6a5acd; /* Lavender blue */
            text-shadow: 2px 2px 4px rgba(106, 90, 205, 0.5);
            margin-bottom: 20px;
        }
        .about-section {
            margin-top: 40px;
            font-size: 18px;
            line-height: 1.6;
            color: #555;
        }
        .about-section h3 {
            color: #6a5acd; /* Lavender blue */
            font-size: 24px;
        }
        .about-section p {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="logo">AI&I</h1>
        <h2>Welcome to Smart Wardrobe Assistant</h2>
        <!-- Login button -->
        <a href="login.php" class="btn btn-login">Login</a>
        <!-- Register button -->
        <a href="register.php" class="btn btn-register">Register</a>
        <!-- About section -->
        <div class="about-section">
            <h3>About</h3>
            <p>Welcome to Smart Wardrobe Assistant! We help you organize your wardrobe and generate stylish outfits based on your preferences. Whether you're preparing for a casual outing or a formal event, our assistant will curate outfits tailored to your taste. Sign in to get started or create an account to unlock additional features.</p>
        </div>
    </div>

    <!-- Bootstrap JS and any other scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

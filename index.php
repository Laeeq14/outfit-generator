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
    <title>AI&I - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: url('https://source.unsplash.com/featured/?pastel,flowers') fixed; /* Soft pastel flowers background image */
            background-size: cover;
        }

        .container {
            position: relative; /* Make the container relative for absolute positioning of text */
            max-width: 600px;
            margin: 50px auto;
            padding: 40px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            box-shadow: 0 0 20px rgba(88, 67, 67, 0.1);
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        h1, p, a {
            color: #7d67ac;
        }

        h1 {
            font-weight: 600;
            text-align: center;
            margin-bottom: 30px;
        }

        p {
            text-align: center;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            transition: color 0.3s;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #eae5f6; /* Soft purple background */
        }

        a:hover {
            background-color: #d4cdf2; /* Lighter purple on hover */
            color: #574d68; /* Darker text on hover */
        }

        .form-container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>AI&I</h1> <!-- Website name -->
        <p>Welcome and Welcome back!</p>
        <?php  if(isset($_SESSION['email']))
		{ ?> <?php } else { ?>
        <div class="text-center dont-have">Already have an account? <a href="login.php">Login</a></div>
        <?php } ?>
        <br>
        <div class="text-center dont-have">Don't have an account? <a href="register.php">Register</a></div>
    </div>
</body>
</html>

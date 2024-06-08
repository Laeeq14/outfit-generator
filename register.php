<?php 
include("config.php");
$error="";
$msg="";
if(isset($_REQUEST['reg']))
{
	$user_name=$_REQUEST['user_name'];
	$email=$_REQUEST['email'];
	$user_pwd=$_REQUEST['user_pwd'];
	$gender=$_REQUEST['gender'];

    $user_pwd = sha1($user_pwd);

    $query = "SELECT * FROM user where email='$email'";
    $res=mysqli_query($con, $query);
	$num=mysqli_num_rows($res);

    if($num == 1)
	{
		$error = "<p class='alert alert-warning'>Email Id already Exist</p> ";
	}
    else
    {
        if(!empty($user_name) && !empty($email) && !empty($user_pwd))
		{
			
			$sql="INSERT INTO users (user_name,email,user_pwd) VALUES ('$user_name','$email','$user_pwd')";
			$result=mysqli_query($con, $sql);
            if($result){
                $msg = "<p class='alert alert-success'>Register Successfully</p> ";
            }
            else{
                $error = "<p class='alert alert-warning'>Register Not Successfully</p> ";
            }
         }else{
         $error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
         }
    }
 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding-top: 50px;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #007bff; /* Blue heading color */
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 20px; /* Rounded corners */
            box-shadow: none; /* Remove default box shadow */
        }
        button[type="submit"] {
            width: 100%;
            border-radius: 20px;
            background-color: #007bff; /* Blue button color */
            border: none;
        }
        button[type="submit"]:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Register</h2>
        <form method="POST">
            <!-- Include fields for registration -->
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <!-- Add a field for gender -->
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</body>
</html>

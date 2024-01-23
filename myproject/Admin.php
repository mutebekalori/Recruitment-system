<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .login-container {
            width: 600px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height: 300px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        .login-btn {
            width: 100%;
            padding: 10px;
            background-color: gray;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .panel {
            width: 100%;
            font-size: 18px;
            padding: 10px;
            background-color: red;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Admin Logins here</h2>
        <form method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required autocomplete="off">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required autocomplete="off">

            <input type="submit" value="Login" name="LoginBtn" class="login-btn">
            <div class="infor"></div>
        </form>

   
    </div>
</body>
</html>

<?php
 include 'database.php';

if(isset($_POST['LoginBtn'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql = "select *from admin_login where uername=? and password=?";
	$stmt= mysqli_prepare($conn,$sql);
	
	if($stmt){
		 mysqli_stmt_bind_param($stmt,'ss',$username,$password);
		mysqli_execute($stmt);

		mysqli_stmt_store_result($stmt);
		if(mysqli_stmt_num_rows($stmt) >0){
			header("location:Admindasboard.php");
			exit();

		}
		else{
			echo "invalid credentials";
		}
	}
}

?>
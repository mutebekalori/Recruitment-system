<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
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
            background-color: #4caf50;
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
        <h2>Login</h2>
        <form  method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required autocomplete="off">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required autocomplete="off">

            <input type="submit" value="Login"  name="LoginBtn" class="login-btn"/>
            <div class="infor">
                
            </div>
        </form>
        <a href="Register.php" class="panel"> <button>Register</button></a>
          <a href="Admindasboard.php" class="panel"><button>Back Home</button></a>  
    </div>
    <!-- for hiding the page after logging in  for the user   who logeed in -->
    <?php
    session_start(); 
    if (isset($_SESSION['username'])) {
    header("Location: Admindasboard.php");
    exit(); 
    }
    ?>
       <?php
        if(isset($_POST['LoginBtn'])){
            $uname =$_POST['username'];
            $pass =$_POST['password'];
            require_once "database.php";
            $sql = "  Select * from registration where  firstname ='$uname' ";
            $result = mysqli_query($conn,$sql);
            $user = mysqli_fetch_array($result,MYSQLI_ASSOC);

            // TESTING NOW
            if($user){
                    // verification of password
                    if(($pass==$user['password'])){
                        header("Location: Admindasboard.php");
                        die();
                    }
                    else{
                        echo "invalid password";
                    }
            }
            else{
                    echo " wrong user name";
            }

        }
    ?>
</body>
</html>



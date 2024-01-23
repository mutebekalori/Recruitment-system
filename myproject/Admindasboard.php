<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Standard Navbar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        nav {
            background-color:gray;
            overflow:hidden;
            align-items: center;
            height: 60px;
        }

        nav a {
            float:left;
            color: white;
            text-align: center;
            align-items: center;
            padding: 20px 20px;
            text-decoration: none;
            width: auto;
            height: 50px;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }
        .admin-panel {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .body-section {
            width: auto;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .body-section img {
            width: auto;
            height: 500px;
            display: block;
            margin: 0 auto;
            border-radius: 8px;
        }

        .footer {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: gray;
            color: #ffffff;
            height: 40px;
            text-align: center;
            position:absolute;
            bottom: 0;
            width: 100%;
        }
        
    </style>
</head>
<body>
    <nav>
        <a style="color: red;" href="#">Pallisa Recruites</a>
        <a href="Admindasboard.php">Home</a>
        <a href="userManagment.php">Users</a>
        <a href="JobPosts.php">JobPosts</a>
        <a href="Jobs.php">Jobs</a>
        <a href="Applicantions.php">Applicantions</a>
        <a href="App list.php">App list</a>
        <a href="Interviews.php">Interviews</a>
        <a href="Analysis.php">Analysis</a>
        <a href="login.php"><button class="btn btn-success" style=" width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;"> Login</button></a>
       <a href="Register.php"> <button class="btn btn-infor" style=" width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;">Register</button></a>
            <a href="Logout.php"> <button class="btn btn-infor" style=" width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;">Logout</button></a>
    </nav> 
    <div class="body-section">
        <img src="./images/05.png" alt="Recruitment System Image">
    </div>
    
    <div class="footer">
        <a href="Admin.php">Admin login here</a> &nbsp ||  &nbsp;
        <p>@copyright.MutebeTech 2024 </p>

    </div>
</body>
</html>


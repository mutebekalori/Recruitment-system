
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: auto;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 700px;
        }

        input {
            outline: none;
            padding: 10px;
            margin: 5px;
            width: 80%;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
            cursor: pointer;
        }
    </style>
<body>
        <?php  
            // print_r($_POST)
            if(isset($_POST['submit']))
            {
                $UserID = $_POST['UserID'];
                $Firstname =$_POST['Firstname'];   
                $Lastname =$_POST['Lastname'] ;
                $DOB =$_POST['DOB'];
                $Email =$_POST['Email'];
                $location =$_POST['Location'];
                $Tel =$_POST['Tel'];
                $Gender =$_POST['Gender'];
                $EducevelsationL =$_POST['EducevelsationL'];
                $Password =$_POST['Password'];
                // handling errors
                // $error = array();
                require_once "database.php";

                // inserting datan to the database
                $sql = "insert into  registration (userID,firstname, lastname,DOB,Email,Gender,education_level,tel,location,password) values (?,?,?,?,?,?,?,?,?,?)";
                $stmp = mysqli_stmt_init($conn);
                // prepared statement
                $preparedstm = mysqli_stmt_prepare($stmp,$sql);
                if($preparedstm){

                    mysqli_stmt_bind_param($stmp,"ssssssssss", $UserID, $Firstname, $Lastname, $DOB,$Email,  $location, $Tel ,  $Gender,  $EducevelsationL,$Password);
                    mysqli_stmt_execute($stmp);
                    
                echo "Registerd sucessfully" ;  
                } 
                else{
                    echo "failed to register";
                }
            }
        ?>

    <form  method="post">
        <p> Feel Free to Register Here</p>
        <input type="text" name="UserID" value="UserID" placeholder="UserID" required><br>
        <input type="text" name="Firstname" value="Firstname" placeholder="Firstname" required><br>
        <input type="password" name="Lastname" value="Lastname" placeholder="Lastname" required><br>
        <input type="text" name="DOB" value="DOB" placeholder="DOB" required><br>
        <input type="text" name="Location" value="Location" placeholder="Location" required><br>
        <input type="text" name="Email" value="Email" placeholder="Email" required><br>
        <input type="text" name="Tel" value="Tel" placeholder="Tel" required><br>
        <input type="text" name="Gender" value="Gender" placeholder="Gender" required><br>
        <input type="text" name="EducevelsationL" value="EducationLevels" placeholder="Education levels" required><br>
        <input type="text" name="Password" value="Password" placeholder="Password" required><br>
        <input type="submit" name="submit"></input>
    </form>
      
</body>
</html>

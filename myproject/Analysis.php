<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analysis Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            overflow: hidden;

        }
        nav {
            background-color: gray;
            overflow:hidden;
            align-items: center;
            height: 50px;
            font-size: medium;
            padding-top: 15px;
        }

        nav a {
            color: white;
            text-align: center;
            align-items: center;
            padding: 30px 30px;
            text-decoration: none;
            width: auto;
            height: 40px;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }
        header {
            background-color: gray;
            color: #fff;
            padding: 5px;
            text-align: center;
            font-size: 13px;
        }

        section {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display:block;
            gap: 15px;
            height: 400px;
            margin: 0px;
        }

        input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            width: 100%;
        }

        input[type="date"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            width: calc(100% - 20px);
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 15px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 15%;
            margin: 10 px 10px;
           
        }

        button:hover {
            background-color: #555;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }
        .footer {
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

    <header>
        <nav>
        <a href="Admindasboard.php">Home</a>
        <a href="userManagment.php">Users</a>
        <a href="JobPosts.php">Jobposts</a>
        <a href="Jobs.php">Jobs</a>
        <a href="Applicantions.php">Applications</a>
        <a href="App list.php">App list</a>
        <a href="Interviews.php">Interviews</a>
        <a href="Analysis.php">Analysis</a>
        </nav>
       
        <h1>Welcome to Analysis Panel</h1>
    </header>

    <section>
        <form id="analysisForm" action="process_analysis.php" method="post" onsubmit="return validateForm()">
            <label for="analysisID">Analysis ID:</label>
            <input type="text" id="analysisID" name="analysisID" required>

            <label for="dateOfAnalysis">Date of Analysis:</label>
            <input type="date" id="dateOfAnalysis" name="dateOfAnalysis" required>

            <label for="selectedCandidates">Selected Candidates:</label>
            <input type="text" id="selectedCandidates" name="selectedCandidates" required>

            <label for="successfulCandidates">Successful Candidates:</label>
            <input type="text" id="successfulCandidates" name="successfulCandidates" required>

            <label for="unsuccessfulCandidates">Unsuccessful Candidates:</label>
            <input type="text" id="unsuccessfulCandidates" name="unsuccessfulCandidates" required>

            <label for="userID">User ID:</label>
            <input type="text" id="userID" name="userID" required>

            <button type="submit">Submit</button>
        </form>
        <div class="error-message" id="errorMessage"></div>
    </section>

    <script>

        function validateForm() {
            var analysisID = document.getElementById("analysisID").value;
            var dateOfAnalysis = document.getElementById("dateOfAnalysis").value;
            var selectedCandidates = document.getElementById("selectedCandidates").value;
            var successfulCandidates = document.getElementById("successfulCandidates").value;
            var unsuccessfulCandidates = document.getElementById("unsuccessfulCandidates").value;
            var userID = document.getElementById("userID").value;

            if (analysisID === "" || dateOfAnalysis === "" || selectedCandidates === "" || successfulCandidates === "" || unsuccessfulCandidates === "" || userID === "") {
                document.getElementById("errorMessage").innerText = "All fields are required";
                return false;
            }

            return true;
        }
    </script>

</body>
<div class="footer">
        <p>@copyright.MutebeTech 2024 </p>
    </div>

</html>
<?php
// Assuming you have a database connection established
$conn = mysqli_connect("localhost", "mutebe", "kalori", "recruitment_system");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $analysisID = $_POST["analysisID"];
    $dateOfAnalysis = $_POST["dateOfAnalysis"];
    $selectedCandidates = $_POST["selectedCandidates"];
    $successfulCandidates = $_POST["successfulCandidates"];
    $unsuccessfulCandidates = $_POST["unsuccessfulCandidates"];
    $userID = $_POST["userID"];

    // Performing my  database insertion 
    $sql = "INSERT INTO analysis_table (analysisID, dateOfAnalysis, selectedCandidates, successfulCandidates, unsuccessfulCandidates, userID) 
            VALUES ('$analysisID', '$dateOfAnalysis', '$selectedCandidates', '$successfulCandidates', '$unsuccessfulCandidates', '$userID')";

    if (mysqli_query($conn, $sql)) {
        echo "Analysis data inserted successfully";
    } else {
        echo "Error: Unable to insert analysis data";
    }
    mysqli_close($conn);
}
?>






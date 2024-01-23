<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Posts</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        nav {
            background-color: gray;
            color: #fff;
            padding: 10px;
            text-align: center;
            padding: 30px 30px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            height: 25px;
        }

        nav a:hover {
            background-color: #555;
        }

        section {
            padding: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        form {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }

        footer {
            background-color: gray;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <nav>
        <a href="Admindasboard.php">Home</a>
        <a href="userManagment.php">Users</a>
        <a href="JobPosts.php">JobPosts</a>
        <a href="Jobs.php">Jobs</a>
        <a href="Applicantions.php">Applicantions</a>
        <a href="App list.php">App list</a>
        <a href="Interviews.php">Interviews</a>
        <a href="Analysis.php">Analysis</a>
    </nav>
    

    <?php
    $hostname = "localhost";
    $username = "mutebe";
    $password = "kalori";
    $dbname = "recruitment_system";

    // Creating a connection to the database
    $conn = new mysqli($hostname, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Function to sanitize user input
    function sanitize_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Checking if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jobpostID = sanitize_input($_POST["jobpostID"]);
        $job_name = sanitize_input($_POST["job_name"]);
        $job_description = sanitize_input($_POST["job_description"]);
        $duration_date = sanitize_input($_POST["duration_date"]);
        $salary_type = sanitize_input($_POST["salary_type"]);
        $department = sanitize_input($_POST["department"]);
        $location = sanitize_input($_POST["location"]);

        // Preparing and executing the SQL query
        $sql = "INSERT INTO Jobpost (jobpostID, job_name, job_description, duration_date, salary_type, department, location) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssss", $jobpostID, $job_name, $job_description, $duration_date, $salary_type, $department, $location);

        if ($stmt->execute()) {
            echo "Job post added successfully!";
            // Automatically redirect to Jobs.php after adding a job post
            echo '<script>window.location.href = "Jobs.php";</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Closing the statement and connection
        $stmt->close();
        $conn->close();
    }
    ?>

    <section>
        <form id="jobPostForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <!-- Your form fields go here -->
            <label for="jobpostID">Job Post ID:</label>
            <input type="text" id="jobpostID" name="jobpostID" required>

            <label for="job_name">Job Name:</label>
            <input type="text" id="job_name" name="job_name" required>

            <label for="job_description">Job Description:</label>
            <textarea id="job_description" name="job_description" rows="4" required></textarea>

            <label for="duration_date">Duration Date:</label>
            <input type="date" id="duration_date" name="duration_date" required>

            <label for="salary_type">Salary Type:</label>
            <select id="salary_type" name="salary_type" required>
                <option value="hourly">Hourly</option>
                <option value="monthly">Monthly</option>
                <option value="yearly">Yearly</option>
            </select>

            <label for="department">Department:</label>
            <input type="text" id="department" name="department" required>

            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required>

            <button type="button" onclick="validateAndSubmit()">Submit</button>
        </form>
    </section>

    <footer>
        @copyright. JobPost 2024
    </footer>

    <script>
        function validateAndSubmit() {
            
            document.getElementById("jobPostForm").submit();
        }
    </script>
</body>

</html>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interview Dashboard</title>
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
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 20px 20px;
            margin: 0 10px;
            border-radius: 5px;
        }

        nav a:hover {
            background-color: #555;
        }

        section {
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form label {
            display: block;
            margin-bottom: 8px;
        }

        form input,
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 15px;
        }

        form button {
            background-color: greenyellow;
            color: red;
            padding: 12px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
        }

        form button:hover {
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

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
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

    <section>
        <form id="applicationForm" method="post" action="processApplication.php" onsubmit="return validateForm()">
            <label for="applicationId">Application ID:</label>
            <input type="text" id="applicationId" name="applicationId" required>
            <span id="errorApplicationId" class="error-message"></span>

            <label for="userId">User ID:</label>
            <input type="text" id="userId" name="userId" required>
            <span id="errorUserId" class="error-message"></span>

            <label for="jobId">Job ID:</label>
            <input type="text" id="jobId" name="jobId" required>
            <span id="errorJobId" class="error-message"></span>

            <label for="applicationDate">Application Date:</label>
            <input type="date" id="applicationDate" name="applicationDate" required>
            <span id="errorApplicationDate" class="error-message"></span>

            <label for="interviewDate">Interview Date:</label>
            <input type="date" id="interviewDate" name="interviewDate" required>
            <span id="errorInterviewDate" class="error-message"></span>

            <label for="interviewNote">Interview Note:</label>
            <textarea id="interviewNote" name="interviewNote" rows="4" required></textarea>
            <span id="errorInterviewNote" class="error-message"></span>

            <button type="button" onclick="submitForm()">Send your Application</button>
        </form>
    </section>

    <footer>
        @copyright mutebetech.com
    </footer>

    <script>
        function validateForm() {
            // Your validation logic goes here
            resetErrorMessages(); // Reset error messages on each submission

            // Example validation: Check if the Application ID is not empty
            var applicationId = document.getElementById("applicationId").value;
            if (applicationId.trim() === "") {
                document.getElementById("errorApplicationId").innerText = "Application ID is required";
                return false;
            }

            // Add similar validation for other fields as needed

            return true;
        }

        function resetErrorMessages() {
            // Reset error messages
            document.getElementById("errorApplicationId").innerText = "";
            document.getElementById("errorUserId").innerText = "";
            document.getElementById("errorJobId").innerText = "";
            document.getElementById("errorApplicationDate").innerText = "";
            document.getElementById("errorInterviewDate").innerText = "";
            document.getElementById("errorInterviewNote").innerText = "";
        }

        function submitForm() {
            if (validateForm()) {
                // Assuming you have validated your form fields here before submission

                // Redirect to App list.php after successful submission
                window.location.href = 'App list.php';
            }
        }
    </script>
</body>

</html>





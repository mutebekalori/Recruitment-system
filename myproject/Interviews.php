<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interview Panel</title>
    <style>
      body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        nav {
            background-color:gray;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
        }

        nav a:hover {
            background-color: #555;
        }

        section {
            padding: 20px;
        }

        form {
            width: auto;
            margin: 0 auto;
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, select {
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
            border-radius: 10px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }

        button.delete, button.edit, button.update {
            background-color: #333;
            color: #fff;
            padding: 8px 12px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-right: 5px;
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

        button.delete:hover, button.edit:hover, button.update:hover {
            background-color: #c9302c;
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
    <nav>
    <p>Interview panel</p>
    </nav>

    <section>
    <table id="interviewTable">
            <thead>
                <tr>
                    <th>Interview ID</th>
                    <th>User ID</th>
                    <th>Application ID</th>
                    <th>Job Post ID</th>
                    <th>Interview Type</th>
                    <th>Interview Date</th>
                    <th>Interview Note</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               
                <tr>
                    <td>1</td>
                    <td>123</td>
                    <td>456</td>
                    <td>789</td>
                    <td>Phone</td>
                    <td>2023-01-01</td>
                    <td>Good interview</td>
                    <td>
                        <button class="edit" onclick="editRow(this)">Edit</button>
                        <button class="update" onclick="updateRow(this)" style="display:none;">Update</button>
                        <button class="delete" onclick="deleteRow(this)">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <form id="interviewForm" action="process_interview.php" method="post" onsubmit="return validateAndSubmit()">
            <button type="submit">Submit</button>
        </form> 
        <form id="searchForm" action="search_interview.php" method="get" onsubmit="return validateAndSearch()">
            <label for="searchInterviewID">Search by Interview ID:</label>
            <input type="text" id="searchInterviewID" name="searchInterviewID" required>
            <button type="submit">Search</button>
        </form>
        <!-- declearing my add button functionality -->
        <button onclick="addRow()">Add</button>
    </section>

    <footer>
    @copyright. MutebeTech 2024
    </footer>
   

    <script>
        function validateAndSubmit() {
            // Validating  my form fields for submission
            var interviewID = document.getElementById("interviewID").value.trim();
           

            if (interviewID === "") {
                alert("Interview ID cannot be empty.");
                return false; // Prevent form submission
            }
           
            return true;
        }
        function validateAndSearch() {
            
            return true;
        }
        // adding my rows functionality
        function addRow() {
            var table = document.getElementById("interviewTable").getElementsByTagName('tbody')[0];
            var newRow = table.insertRow(table.rows.length);

            for (var i = 0; i < 7; i++) {
                var cell = newRow.insertCell(i);
                cell.innerHTML = '<input type="text">';
            }

            var actionCell = newRow.insertCell(7);
            actionCell.innerHTML = '<button class="edit" onclick="editRow(this)">Edit</button>' +
                '<button class="update" onclick="updateRow(this)" style="display:none;">Update</button>' +
                '<button class="delete" onclick="deleteRow(this)">Delete</button>';
        }

        function editRow(button) {
            var row = button.parentNode.parentNode;
            var cells = row.getElementsByTagName('td');

            for (var i = 0; i < cells.length - 1; i++) {
                var cellValue = cells[i].innerHTML;
                cells[i].innerHTML = '<input type="text" value="' + cellValue + '">';
            }

            button.style.display = 'none';
            row.querySelector('button.update').style.display = 'inline-block';
        }
            // declearing my update button for this pannel from  my parents node to the young nodes
        function updateRow(button) {
            var row = button.parentNode.parentNode;
            var cells = row.getElementsByTagName('td');

            for (var i = 0; i < cells.length - 1; i++) {
                var cellValue = cells[i].getElementsByTagName('input')[0].value;
                cells[i].innerHTML = cellValue;
            }

            button.style.display = 'none';
            row.querySelector('button.edit').style.display = 'inline-block';
        }
                // declearing my delete button from the parent nodes on my interview pannel by deleting the child element
        function deleteRow(button) {
            var row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>
</body>
</html>

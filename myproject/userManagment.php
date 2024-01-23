<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
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
            font-size: medium;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            margin: 0 15px;
            font-size: 16px;
            padding: 25px 25px;
        }

        nav p {
            color: #fff;
            margin: 0;
            font-size: 20px;
        }

        .admin-panel {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .panel-heading {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .user-management-form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 50%;
            padding: 8px;
            box-sizing: border-box;
        }

        .user-list {
            list-style-type: none;
            padding: 0;
            margin-top: 2px;
        }

        .user-item {
            border: 1px solid #ddd;
            border-radius: 2px;
            margin-bottom: 5px;
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .user-details {
            flex-grow: 1;
            margin-right: 10px;
        }

        .add-user-btn,
        .save-changes-btn {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        .delete-btn,
        .edit-btn {
            background-color: #dc3545;
            color: #ffffff;
            padding: 5px 10px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-left: 5px;
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
        <a href="JobPosts.php">Job Posts</a>
        <a href="Jobs.php">Jobs</a>
        <a href="Applicantions.php">Applications</a>
        <a href="App list.php">App list</a>
        <a href="Interviews.php">Interviews</a>
        <a href="Analysis.php">Analysis</a>
    </nav>
    <nav>
        <p>Welcome to the Users Page</p>
    </nav>

    <div class="container mt-4">
        <div class="admin-panel">

            <ul class="user-list" id="userList">
                
                <li class="user-item">
                    <div class="user-details">
                        <strong>Username: kisse vicent</strong>
                        <p>Email: kissevicent@gmail.com</p>
                    </div>
                   
                </li>

                <li class="user-item">
                    <div class="user-details">
                        <strong>Username: erina wenene</strong>
                        <p>Email: erina wenene@gmail.com</p>
                    </div>
                   
                </li>

            </ul>
            
            <div class="panel-heading">User Details</div>
            <form class="user-management-form" id="userManagementForm">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="button" class="add-user-btn" onclick="addUser()">Add User</button>
                <button type="button" class="save-changes-btn" onclick="saveChanges()">Save Changes</button>
            </form>

            
        </div>
    </div>
    <footer>
        @copyright. mutebeTec
    </footer>
    <!-- Bootstrap JS if needed -->
    <script src="path/to/bootstrap/js/bootstrap.min.js"></script>

    <script>
        let editingUser = null;

        function addUser() {
            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            const userList = document.getElementById('userList');
            const newUserItem = document.createElement('li');
            newUserItem.className = 'user-item';
            newUserItem.innerHTML = `
                <div class="user-details">
                    <strong>Username: ${username}</strong>
                    <p>Email: ${email}</p>
                </div>
                <div class="action-buttons">
                    <button class="edit-btn" onclick="editUser(this)">Edit</button>
                    <button class="delete-btn" onclick="deleteUser(this)">Delete</button>
                </div>`;
            userList.appendChild(newUserItem);

            document.getElementById('username').value = '';
            document.getElementById('email').value = '';
            document.getElementById('password').value = '';
        }

        function editUser(buttonElement) {
            editingUser = buttonElement.parentNode.parentNode;

            const username = editingUser.querySelector('.user-details strong').innerText;
            const email = editingUser.querySelector('.user-details p').innerText;

            document.getElementById('username').value = username;
            document.getElementById('email').value = email;
            document.getElementById('password').value = '';

            document.querySelector('.add-user-btn').style.display = 'none';
            document.querySelector('.save-changes-btn').style.display = 'block';
        }

        function saveChanges() {
            if (!editingUser) {
                return;
            }

            const updatedUsername = document.getElementById('username').value;
            const updatedEmail = document.getElementById('email').value;

            editingUser.querySelector('.user-details strong').innerText = `Username: ${updatedUsername}`;
            editingUser.querySelector('.user-details p').innerText = `Email: ${updatedEmail}`;

            document.getElementById('username').value = '';
            document.getElementById('email').value = '';
            document.getElementById('password').value = '';

            document.querySelector('.add-user-btn').style.display = 'block';
            document.querySelector('.save-changes-btn').style.display = 'none';

            editingUser = null;
        }

        function deleteUser(buttonElement) {
            const userItem = buttonElement.parentNode.parentNode;
            userItem.parentNode.removeChild(userItem);
        }
    </script>
</body>
</html>


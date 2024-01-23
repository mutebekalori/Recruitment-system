<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs Page</title>
    <style>
        body {
            font-family:sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            background-color: gray;
            padding: 10px;
            display: flex;
            height: 40px;
            justify-content:space-around;
        }

        nav a {
            padding: 20px 20px;
            color: #fff;
            text-decoration: none;
        }

        section {
            padding: 40px;
            align-items: center;
            justify-content: center;
            display: flex;
        }

        .job-categories {
            margin-bottom: 50px;
            background-color: green;
           
        }

        .job-image {
            display:grid;
            align-items: center;
            justify-content: center;
            grid-template-columns: repeat(auto-fit,minmax(300px, 1fr));
        }
	

        .job-image div:hover {
            transform: scale(1.05);
        }

        .job-image img {
            width: 150px;;
            height: 180px;
            margin: 10px;
        }
        footer {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: gray;
            color: #ffffff;
            height: 40px;
            text-align: center;
            position:fixed;
            bottom: 0;
            width: 100%;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Getting the select element
            var categorySelect = document.querySelector('select');

            // Getting  all job listings
            var jobListings = document.querySelectorAll('.job-image div');

            // Adding  event listener for the selection change
            categorySelect.addEventListener('change', function () {
                // Getting  the selected category
                var selectedCategory = categorySelect.value.toLowerCase();

                // Looping  through all job listings
                jobListings.forEach(function (listing) {
                    // Check if the job listing's class contains the selected category
                    if (listing.classList.contains(selectedCategory)) {
                        // Display the job listing
                        listing.style.display = 'block';
                    } else {
                        // Hide the job listing
                        listing.style.display = 'none';
                    }
                });
            });
        });
    </script>
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

    <section class="job-categories">
        <h2>Job Categories</h2>
        <select>
        <option value="All">All</option>
            <option value="softwareengineer">Software Engineer</option>
            <option value="dataengineering">Data Engineering</option>
            <option value="education">Education</option>
            <option value="nursing">Nursing</option>
            <option value="procurement">Procurement</option>
            <option value="accountingmanager">Accounting Manager</option>
            <option value="cleaner">Cleaner</option>
        </select>
    </section>

    <section class="job-image">
        <div class="softwareengineer">
            <img src="./images/wk img/004.png" alt="software engineer">
            <p>Job name:softwares</p>
            <p> Description:software </p>
            <h5> Title:software</h5>
        </div>

        <div class="dataengineering">
            <img src="./images/wk img/06.PNG" alt="">
            <p>Job name:Data engineer</p>
            <p> Description:Data engineer</p>
            <h5> Title:Data Eng</h5>
        </div>

        <div class="education">
            <img src="./images/wk img/01.PNG" alt="">
            <p>Job name:Education</p>
            <p> Description:Education</p>
            <h5> Title:Education</h5>
        </div>

        <div class="nursing">
            <img src="./images/wk img/02.PNG" alt="">
            <p>Job name:Nursing</p>
            <p> Description:Nursing</p>
            <h5> Title:Nursing</h5>
        </div>

        <div class="procurement">
            <img src="./images/wk img/03.PNG" alt="">
            <p>jobname: Procurements</p>
            <p> Description:Procurements</p>
            <h5> Title:Procurements</h5>
        </div>

        <div class="accountingmanager">
            <img src="./images/wk img/o4.PNG" alt="">
            <p>Jobname:Accounts</p>
            <p> Description:Accounts</p>
            <h5> Title:Accounts</h5>
        </div>

        <div class="cleaner">
            <img src="./images/wk img/07.PNG" alt="">
            <p>Jobname:Cleaner</p>
            <p> Description:Cleaner</p>
            <h5> Title:Cleaner</h5>
        </div>
       
    </section>
    <footer>
        <p>@copyright.MutebeTech 2024 </p>
    </footer> 

</body>
</html>






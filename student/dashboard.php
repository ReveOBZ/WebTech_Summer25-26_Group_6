<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="dashboard-page">

<div class="dashboard-header">
    <h2>Online Quiz</h2>
    <p>Welcome, Student</p>
</div>

<div class="dashboard-container">

    <div class="dashboard-menu">

        <h3>Student Panel</h3>

        <a href="dashboard.php">Dashboard</a>
        <a href="courses.php">My Courses</a>
        <a href="quizzes.php">Quizzes</a>
        <a href="../profile.php">Profile</a>
        <a href="../login.php">Logout</a>
        

    </div>

    <div class="dashboard-content">

        <h1>Student Dashboard</h1>

        <p>Welcome to your Online Quiz Dashboard.</p>

        <div class="dashboard-box">

            <div class="box">
                <h3>My Courses</h3>
                <p>2</p>
            </div>

            <div class="box">
                <h3>Completed Quizzes</h3>
                <p>2</p>
            </div>

            <div class="box">
                <h3>My Results</h3>
                <p>2</p>
            </div>

        </div>

        <div class="dashboard-section">

            <h2>My Courses</h2>

            <table>

                <tr>
                    <th>Course</th>
                    <th>Subject</th>
                    <th>Status</th>
                </tr>

                <tr>
                    <td>Web Programming</td>
                    <td>PHP</td>
                    <td>Active</td>
                </tr>

                <tr>
                    <td>Database System</td>
                    <td>MySQL</td>
                    <td>Active</td>
                </tr>

            </table>

        </div>

        <div class="dashboard-section">

            <h2>Recent Results</h2>

            <table>

                <tr>
                    <th>Quiz</th>
                    <th>Marks</th>
                    <th>Result</th>
                </tr>

                <tr>
                    <td>PHP Basic Quiz</td>
                    <td>8 / 10</td>
                    <td>Pass</td>
                </tr>

                <tr>
                    <td>MySQL Basic Quiz</td>
                    <td>7 / 10</td>
                    <td>Pass</td>
                </tr>

            </table>

        </div>

    </div>

</div>

</body>
</html>
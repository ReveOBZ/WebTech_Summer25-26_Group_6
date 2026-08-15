<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="dashboard-page">

<div class="dashboard-header">
    <h2>Online Quiz</h2>
    <p>Welcome, Teacher</p>
</div>

<div class="dashboard-container">

    <div class="dashboard-menu">
        <h3>Teacher Panel</h3>
        <a href="dashboard.php">Dashboard</a>
        <a href="courses.php">Courses</a>
        <a href="quizzes.php">Quizzes</a>
        <a href="../profile.php">Profile</a>
        <a href="../login.php">Logout</a>
        

    </div>

    <div class="dashboard-content">

        <h1>Teacher Dashboard</h1>
        <p>Welcome to your Teacher Dashboard.</p>

        <div class="dashboard-box">

            <div class="box">
                <h3>My Courses</h3>
                <p>2</p>
            </div>

            <div class="box">
                <h3>My Quizzes</h3>
                <p>2</p>
            </div>

            <div class="box">
                <h3>Student Results</h3>
                <p>3</p>
            </div>

        </div>

        <div class="dashboard-section">

            <h2>Student Results</h2>

            <table>
                <tr>
                    <th>Student</th>
                    <th>Quiz</th>
                    <th>Marks</th>
                    <th>Result</th>
                </tr>

                <tr>
                    <td>Student 1</td>
                    <td>PHP Basic Quiz</td>
                    <td>8 / 10</td>
                    <td>Pass</td>
                </tr>

                <tr>
                    <td>Student 2</td>
                    <td>MySQL Basic Quiz</td>
                    <td>5 / 10</td>
                    <td>Fail</td>
                </tr>
            </table>

        </div>

    </div>

</div>

</body>
</html>
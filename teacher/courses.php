<?php

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = "Course added successfully.";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
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

        <h1>My Courses</h1>

        <?php if ($message != ""): ?>
            <p class="enrolled-text"><?php echo $message; ?></p>
        <?php endif; ?>

        <div class="course-card">

            <h2>Add Course</h2>

            <form method="POST">

                <p>Course Name</p>
                <input type="text" name="course" required>

                <p>Subject</p>
                <input type="text" name="subject" required>

                <br><br>

                <button type="submit" class="start-button">
                    Add Course
                </button>

            </form>

        </div>

        <div class="dashboard-section">

            <h2>My Courses</h2>

            <table>

                <tr>
                    <th>Course</th>
                    <th>Subject</th>
                </tr>

                <tr>
                    <td>Web Programming</td>
                    <td>PHP</td>
                </tr>

                <tr>
                    <td>Database System</td>
                    <td>MySQL</td>
                </tr>

            </table>

        </div>

    </div>

</div>

</body>
</html>
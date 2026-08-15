<?php

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = "Quiz added successfully.";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizzes</title>
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

        <h1>Quizzes</h1>

        <?php if ($message != ""): ?>
            <p class="enrolled-text"><?php echo $message; ?></p>
        <?php endif; ?>

        <div class="course-card">

            <h2>Add Quiz</h2>

            <form method="POST">

                <p>Quiz Title</p>
                <input type="text" name="title" required>

                <p>Course</p>

                <select name="course" required>
                    <option value="">Select Course</option>
                    <option>Web Programming</option>
                    <option>Database System</option>
                </select>

                <br><br>

                <button type="submit" class="start-button">
                    Add Quiz
                </button>

            </form>

        </div>

        <div class="dashboard-section">

            <h2>Quiz List</h2>

            <table>

                <tr>
                    <th>Quiz</th>
                    <th>Course</th>
                    <th>Marks</th>
                </tr>

                <tr>
                    <td>PHP Basic Quiz</td>
                    <td>Web Programming</td>
                    <td>10</td>
                </tr>

                <tr>
                    <td>MySQL Basic Quiz</td>
                    <td>Database System</td>
                    <td>10</td>
                </tr>

            </table>

        </div>

    </div>

</div>

</body>
</html>
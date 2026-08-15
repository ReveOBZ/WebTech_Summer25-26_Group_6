<?php

$enrolled = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enrolled = $_POST["course"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Courses</title>
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

        <h1>My Courses</h1>

        <?php if ($enrolled != ""): ?>

            <div class="course-card">

                <h2><?php echo $enrolled; ?></h2>

                <?php if ($enrolled == "Web Programming"): ?>

                    <p><strong>Subject:</strong> PHP</p>
                    <p><strong>Instructor:</strong> Mr. Rahim</p>
                    <p><strong>Description:</strong> Learn basic PHP and web programming.</p>

                <?php else: ?>

                    <p><strong>Subject:</strong> MySQL</p>
                    <p><strong>Instructor:</strong> Mr. Karim</p>
                    <p><strong>Description:</strong> Learn basic database and MySQL.</p>

                <?php endif; ?>

                <p class="enrolled-text">
                    You are enrolled in this course.
                </p>

            </div>

        <?php else: ?>

            <p>Choose a course and enroll.</p>

            <div class="course-card">

                <h2>Web Programming</h2>

                <p><strong>Subject:</strong> PHP</p>
                <p><strong>Instructor:</strong> Mr. Rahim</p>
                <p><strong>Description:</strong> Learn basic PHP and web programming.</p>

                <form method="POST">

                    <input type="hidden" name="course" value="Web Programming">

                    <button
                        type="submit"
                        class="start-button"
                        onclick="return confirm('Do you want to enroll in Web Programming?')">
                        Enroll
                    </button>

                </form>

            </div>

            <div class="course-card">

                <h2>Database System</h2>

                <p><strong>Subject:</strong> MySQL</p>
                <p><strong>Instructor:</strong> Mr. Karim</p>
                <p><strong>Description:</strong> Learn basic database and MySQL.</p>

                <form method="POST">

                    <input type="hidden" name="course" value="Database System">

                    <button
                        type="submit"
                        class="start-button"
                        onclick="return confirm('Do you want to enroll in Database System?')">
                        Enroll
                    </button>

                </form>

            </div>

        <?php endif; ?>

    </div>

</div>

</body>
</html>
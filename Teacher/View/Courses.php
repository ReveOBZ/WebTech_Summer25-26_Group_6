<?php include "../Control/AddCourse.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>My Courses</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body class="dashboard-page">

<div class="dashboard-header">
    <h2>EduQuiz</h2>
    <p>Welcome, <?php echo htmlspecialchars($_SESSION["Name"]); ?></p>
</div>

<div class="dashboard-container">
    <div class="dashboard-menu">
        <h3>Teacher Panel</h3>
        <a href="Dashboard.php">Dashboard</a>
        <a href="Courses.php">Courses</a>
        <a href="Quizzes.php">Quizzes</a>
        <a href="Profile.php">Profile</a>
        <a href="../Control/logout.php">Logout</a>
    </div>

    <div class="dashboard-content">
        <h2>Courses</h2>
        <?php if($message!=""): ?><p class="success"><?php echo $message; ?></p><?php endif; ?>

        <div class="course-card">
            <h3>Add Course</h3>
            <form method="post">
                <div class="form-group"><label>Course Name</label><input type="text" name="coursename" required></div>
                <div class="form-group"><label>Subject</label><input type="text" name="subject" required></div>
                <button type="submit" name="add">Add Course</button>
            </form>
        </div>

        <table class="data-table">
        <tr><th>Course</th><th>Subject</th></tr>
        <?php while($row = $courses->fetch_assoc()): ?>
        <tr><td><?php echo htmlspecialchars($row["CourseName"]); ?></td><td><?php echo htmlspecialchars($row["Subject"]); ?></td></tr>
        <?php endwhile; ?>
        </table>
    </div>
</div>

</body>
</html>
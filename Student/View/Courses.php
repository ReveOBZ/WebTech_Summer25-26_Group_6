<?php include "../Control/Enroll.php"; ?>
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
        <h3>Student Panel</h3>
        <a href="Dashboard.php">Dashboard</a>
        <a href="Courses.php">My Courses</a>
        <a href="Quizzes.php">Quizzes</a>
        <a href="Profile.php">Profile</a>
        <a href="../Control/logout.php">Logout</a>
    </div>

    <div class="dashboard-content">
        <h2>Courses</h2>
        <?php if($message!=""): ?><p class="success"><?php echo $message; ?></p><?php endif; ?>

        <div class="course-card">
            <h3>Available Courses</h3>
            <form method="post">
                <div class="form-group">
                    <label>Course</label>
                    <select name="courseid" required>
                        <?php $available->data_seek(0); while($c = $available->fetch_assoc()): ?>
                        <option value="<?php echo $c["CourseID"]; ?>"><?php echo htmlspecialchars($c["CourseName"]); ?> (<?php echo htmlspecialchars($c["Subject"]); ?>)</option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <button type="submit" name="enroll">Enroll</button>
            </form>
        </div>

        <h3>My Enrolled Courses</h3>
        <table class="data-table">
        <tr><th>Course</th><th>Subject</th></tr>
        <?php $myCourses->data_seek(0); while($row = $myCourses->fetch_assoc()): ?>
        <tr><td><?php echo htmlspecialchars($row["CourseName"]); ?></td><td><?php echo htmlspecialchars($row["Subject"]); ?></td></tr>
        <?php endwhile; ?>
        </table>
    </div>
</div>

</body>
</html>
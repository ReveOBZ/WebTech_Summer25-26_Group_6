<?php include "../Control/AddQuiz.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Quizzes</title>
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
        <h2>Quizzes</h2>
        <?php if($message!=""): ?><p class="success"><?php echo $message; ?></p><?php endif; ?>

        <div class="course-card">
            <h3>Add Quiz</h3>
            <form method="post">
                <div class="form-group">
                    <label>Quiz Title</label>
                    <input type="text" name="title" required>
                </div>
                <div class="form-group">
                    <label>Course</label>
                    <select name="course" required>
                        <?php $myCourses->data_seek(0); while($c = $myCourses->fetch_assoc()): ?>
                        <option value="<?php echo $c["CourseID"]; ?>"><?php echo htmlspecialchars($c["CourseName"]); ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <h4>Questions (up to 5)</h4>
                <?php for($i=0;$i<5;$i++): ?>
                <div class="course-card">
                    <div class="form-group"><label>Question <?php echo $i+1; ?></label><input type="text" name="question[]"></div>
                    <div class="form-group"><label>Option A</label><input type="text" name="optiona[]"></div>
                    <div class="form-group"><label>Option B</label><input type="text" name="optionb[]"></div>
                    <div class="form-group"><label>Option C</label><input type="text" name="optionc[]"></div>
                    <div class="form-group"><label>Option D</label><input type="text" name="optiond[]"></div>
                    <div class="form-group">
                        <label>Correct Option</label>
                        <select name="correct[]">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                </div>
                <?php endfor; ?>

                <button type="submit" name="add_quiz">Save Quiz</button>
            </form>
        </div>

        <h3>Quiz List</h3>
        <table class="data-table">
        <tr><th>Quiz</th><th>Course</th><th>Marks</th></tr>
        <?php while($row = $quizzes->fetch_assoc()): ?>
        <tr><td><?php echo htmlspecialchars($row["Title"]); ?></td><td><?php echo htmlspecialchars($row["CourseName"]); ?></td><td><?php echo $row["TotalMarks"]; ?></td></tr>
        <?php endwhile; ?>
        </table>
    </div>
</div>

</body>
</html>
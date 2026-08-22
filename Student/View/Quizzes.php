<?php include "../Control/SubmitQuiz.php"; ?>
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
        <h3>Student Panel</h3>
        <a href="Dashboard.php">Dashboard</a>
        <a href="Courses.php">My Courses</a>
        <a href="Quizzes.php">Quizzes</a>
        <a href="Profile.php">Profile</a>
        <a href="../Control/logout.php">Logout</a>
    </div>

    <div class="dashboard-content">
        <h2>Quizzes</h2>

        <?php if($step=="list"): ?>
            <?php foreach($quizList as $qz): ?>
            <div class="course-card">
                <h3><?php echo htmlspecialchars($qz["CourseName"]); ?></h3>
                <p><?php echo htmlspecialchars($qz["Title"]); ?> &mdash; <?php echo $qz["TotalMarks"]; ?> Marks</p>
                <form method="post">
                    <input type="hidden" name="quiz" value="<?php echo $qz["QuizID"]; ?>">
                    <button type="submit" name="start">Start Quiz</button>
                </form>
            </div>
            <?php endforeach; ?>

        <?php elseif($step=="quiz"): ?>
            <form method="post">
                <input type="hidden" name="quiz" value="<?php echo $quizId; ?>">
                <?php while($q = $questions->fetch_assoc()): ?>
                <div class="course-card">
                    <p><strong><?php echo htmlspecialchars($q["QuestionText"]); ?></strong></p>
                    <label><input type="radio" name="answer[<?php echo $q["QuestionID"]; ?>]" value="A"> <?php echo htmlspecialchars($q["OptionA"]); ?></label><br>
                    <label><input type="radio" name="answer[<?php echo $q["QuestionID"]; ?>]" value="B"> <?php echo htmlspecialchars($q["OptionB"]); ?></label><br>
                    <label><input type="radio" name="answer[<?php echo $q["QuestionID"]; ?>]" value="C"> <?php echo htmlspecialchars($q["OptionC"]); ?></label><br>
                    <label><input type="radio" name="answer[<?php echo $q["QuestionID"]; ?>]" value="D"> <?php echo htmlspecialchars($q["OptionD"]); ?></label>
                </div>
                <?php endwhile; ?>
                <button type="submit" name="submit">Submit Quiz</button>
            </form>

        <?php elseif($step=="result"): ?>
            <div class="course-card">
                <h3>Result</h3>
                <p>Score: <?php echo $score; ?> / <?php echo $total; ?></p>
                <p>Status: <strong><?php echo $status; ?></strong></p>
                <a href="Quizzes.php">Back to Quizzes</a>
            </div>
        <?php endif; ?>
    </div>
</div>

</body>
</html>
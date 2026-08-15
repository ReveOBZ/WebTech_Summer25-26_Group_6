<?php

$step = "list";
$course = "";
$score = 0;

if (isset($_POST["start"])) {

    $course = $_POST["course"];
    $step = "quiz";

}

if (isset($_POST["submit"])) {

    $course = $_POST["course"];
    $step = "result";

    if ($course == "PHP") {

        if (isset($_POST["q1"]) && $_POST["q1"] == "A") $score += 2;
        if (isset($_POST["q2"]) && $_POST["q2"] == "B") $score += 2;
        if (isset($_POST["q3"]) && $_POST["q3"] == "C") $score += 2;
        if (isset($_POST["q4"]) && $_POST["q4"] == "A") $score += 2;
        if (isset($_POST["q5"]) && $_POST["q5"] == "B") $score += 2;

    } else {

        if (isset($_POST["q1"]) && $_POST["q1"] == "A") $score += 2;
        if (isset($_POST["q2"]) && $_POST["q2"] == "A") $score += 2;
        if (isset($_POST["q3"]) && $_POST["q3"] == "C") $score += 2;
        if (isset($_POST["q4"]) && $_POST["q4"] == "B") $score += 2;
        if (isset($_POST["q5"]) && $_POST["q5"] == "A") $score += 2;

    }

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

        <?php if ($step == "list"): ?>

            <h1>Quizzes</h1>

            <div class="course-card">

                <h2>Web Programming</h2>

                <p>PHP Basic Quiz</p>
                <p>5 Questions | 10 Marks</p>

                <form method="POST">

                    <input type="hidden" name="course" value="PHP">

                    <button
                        type="submit"
                        name="start"
                        class="start-button"
                        onclick="return confirm('Do you want to start the PHP Quiz?')">
                        Start Quiz
                    </button>

                </form>

            </div>

            <div class="course-card">

                <h2>Database System</h2>

                <p>MySQL Basic Quiz</p>
                <p>5 Questions | 10 Marks</p>

                <form method="POST">

                    <input type="hidden" name="course" value="MySQL">

                    <button
                        type="submit"
                        name="start"
                        class="start-button"
                        onclick="return confirm('Do you want to start the MySQL Quiz?')">
                        Start Quiz
                    </button>

                </form>

            </div>

        <?php elseif ($step == "quiz"): ?>

            <h1><?php echo $course; ?> Quiz</h1>

            <p>5 Questions | 10 Marks</p>

            <form method="POST">

                <input type="hidden" name="course" value="<?php echo $course; ?>">

                <?php if ($course == "PHP"): ?>

                    <div class="course-card">

                        <h3>1. Which symbol is used for a PHP variable?</h3>

                        <input type="radio" name="q1" value="A"> $<br>
                        <input type="radio" name="q1" value="B"> @<br>
                        <input type="radio" name="q1" value="C"> #<br>
                        <input type="radio" name="q1" value="D"> &

                    </div>

                    <div class="course-card">

                        <h3>2. Which keyword is used to print text?</h3>

                        <input type="radio" name="q2" value="A"> show<br>
                        <input type="radio" name="q2" value="B"> echo<br>
                        <input type="radio" name="q2" value="C"> display<br>
                        <input type="radio" name="q2" value="D"> text

                    </div>

                    <div class="course-card">

                        <h3>3. PHP code starts with?</h3>

                        <input type="radio" name="q3" value="A"> &lt;html&gt;<br>
                        <input type="radio" name="q3" value="B"> &lt;script&gt;<br>
                        <input type="radio" name="q3" value="C"> &lt;?php<br>
                        <input type="radio" name="q3" value="D"> &lt;php&gt;

                    </div>

                    <div class="course-card">

                        <h3>4. Which method sends form data?</h3>

                        <input type="radio" name="q4" value="A"> POST<br>
                        <input type="radio" name="q4" value="B"> SEND<br>
                        <input type="radio" name="q4" value="C"> FORM<br>
                        <input type="radio" name="q4" value="D"> DATA

                    </div>

                    <div class="course-card">

                        <h3>5. Which is a PHP file extension?</h3>

                        <input type="radio" name="q5" value="A"> .html<br>
                        <input type="radio" name="q5" value="B"> .php<br>
                        <input type="radio" name="q5" value="C"> .css<br>
                        <input type="radio" name="q5" value="D"> .js

                    </div>

                <?php else: ?>

                    <div class="course-card">

                        <h3>1. Which language is used with MySQL?</h3>

                        <input type="radio" name="q1" value="A"> SQL<br>
                        <input type="radio" name="q1" value="B"> HTML<br>
                        <input type="radio" name="q1" value="C"> CSS<br>
                        <input type="radio" name="q1" value="D"> PHP

                    </div>

                    <div class="course-card">

                        <h3>2. Which command creates a database?</h3>

                        <input type="radio" name="q2" value="A"> CREATE<br>
                        <input type="radio" name="q2" value="B"> MAKE<br>
                        <input type="radio" name="q2" value="C"> ADD<br>
                        <input type="radio" name="q2" value="D"> NEW

                    </div>

                    <div class="course-card">

                        <h3>3. Which command gets data?</h3>

                        <input type="radio" name="q3" value="A"> GET<br>
                        <input type="radio" name="q3" value="B"> SHOW<br>
                        <input type="radio" name="q3" value="C"> SELECT<br>
                        <input type="radio" name="q3" value="D"> FIND

                    </div>

                    <div class="course-card">

                        <h3>4. Which command removes a table?</h3>

                        <input type="radio" name="q4" value="A"> REMOVE<br>
                        <input type="radio" name="q4" value="B"> DROP<br>
                        <input type="radio" name="q4" value="C"> CLEAR<br>
                        <input type="radio" name="q4" value="D"> DELETE

                    </div>

                    <div class="course-card">

                        <h3>5. Which one is a database system?</h3>

                        <input type="radio" name="q5" value="A"> MySQL<br>
                        <input type="radio" name="q5" value="B"> HTML<br>
                        <input type="radio" name="q5" value="C"> CSS<br>
                        <input type="radio" name="q5" value="D"> JavaScript

                    </div>

                <?php endif; ?>

                <button
                    type="submit"
                    name="submit"
                    class="start-button"
                    onclick="return confirm('Are you sure you want to submit the quiz?')">
                    Submit Quiz
                </button>

            </form>

        <?php else: ?>

            <h1>Quiz Result</h1>

            <div class="course-card">

                <h2><?php echo $course; ?> Quiz</h2>

                <p>
                    <strong>Your Score:</strong>
                    <?php echo $score; ?> / 10
                </p>

                <p>
                    <strong>Result:</strong>

                    <?php if ($score >= 6): ?>
                        <span class="enrolled-text">Pass</span>
                    <?php else: ?>
                        <span>Fail</span>
                    <?php endif; ?>

                </p>

                <a href="quizzes.php" class="start-button">
                    Back to Quizzes
                </a>

            </div>

        <?php endif; ?>

    </div>

</div>

</body>
</html>
<?php

$step = "list";
$message = "";
$title = "";
$course = "";

if (isset($_POST["add_quiz"]) || isset($_POST["edit_quiz"])) {

    $title = $_POST["title"];
    $course = $_POST["course"];
    $step = "questions";
}

if (isset($_POST["save_quiz"])) {

    $message = "Quiz added successfully.";
    $step = "list";
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

        <?php if ($step == "list"): ?>

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
                        <option value="Web Programming">Web Programming</option>
                        <option value="Database System">Database System</option>
                    </select>

                    <br><br>

                    <button type="submit" name="add_quiz" class="start-button">
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
                        <th>Action</th>
                    </tr>

                    <tr>
                        <td>PHP Basic Quiz</td>
                        <td>Web Programming</td>
                        <td>10</td>
                        <td>
                            <form method="POST">
                                <input type="hidden" name="title" value="PHP Basic Quiz">
                                <input type="hidden" name="course" value="Web Programming">

                                <button type="submit" name="edit_quiz" class="start-button">
                                    Edit
                                </button>
                            </form>
                        </td>
                    </tr>

                    <tr>
                        <td>MySQL Basic Quiz</td>
                        <td>Database System</td>
                        <td>10</td>
                        <td>
                            <form method="POST">
                                <input type="hidden" name="title" value="MySQL Basic Quiz">
                                <input type="hidden" name="course" value="Database System">

                                <button type="submit" name="edit_quiz" class="start-button">
                                    Edit
                                </button>
                            </form>
                        </td>
                    </tr>

                </table>

            </div>

        <?php else: ?>

            <h1><?php echo $title; ?></h1>

            <p>Course: <strong><?php echo $course; ?></strong></p>

            <form method="POST">

                <input type="hidden" name="title" value="<?php echo $title; ?>">
                <input type="hidden" name="course" value="<?php echo $course; ?>">

                <?php for ($i = 1; $i <= 5; $i++): ?>

                    <div class="course-card">

                        <h3>Question <?php echo $i; ?></h3>

                        <p>Question</p>
                        <input type="text" name="q<?php echo $i; ?>" required>

                        <p>Option A</p>
                        <input type="text" name="q<?php echo $i; ?>_a" required>

                        <p>Option B</p>
                        <input type="text" name="q<?php echo $i; ?>_b" required>

                        <p>Option C</p>
                        <input type="text" name="q<?php echo $i; ?>_c" required>

                        <p>Option D</p>
                        <input type="text" name="q<?php echo $i; ?>_d" required>

                        <p>Correct Answer</p>

                        <select name="q<?php echo $i; ?>_correct" required>
                            <option value="">Select Answer</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>

                    </div>

                <?php endfor; ?>

                <button type="submit" name="save_quiz" class="start-button">
                    Save Quiz
                </button>

            </form>

        <?php endif; ?>

    </div>

</div>

</body>
</html>
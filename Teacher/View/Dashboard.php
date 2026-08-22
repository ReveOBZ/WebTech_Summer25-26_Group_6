<?php
session_start();
if(!isset($_SESSION["Email"])){ header("location: Login.php"); exit(); }
include "../model/DatabaseConnection.php";
$connection=new DatabaseConnection();
$conobj=$connection->OpenCon();
$myCourses = $connection->GetMyCourses($conobj,$_SESSION["Email"]);
$courseCount = $myCourses->num_rows;
$quizResult = $connection->GetMyQuizzes($conobj,$_SESSION["Email"]);
$quizCount = $quizResult->num_rows;
$connection->CloseCon($conobj);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Teacher Dashboard</title>
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
        <h2>Teacher Dashboard</h2>
        <p>Welcome to Teacher Panel.</p>

        <div class="stat-cards">
            <div class="stat-card"><p>My Courses</p><h2><?php echo $courseCount; ?></h2></div>
            <div class="stat-card"><p>My Quizzes</p><h2><?php echo $quizCount; ?></h2></div>
        </div>
    </div>
</div>

</body>
</html>
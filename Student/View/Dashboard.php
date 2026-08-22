<?php
session_start();
if(!isset($_SESSION["Email"])){ header("location: Login.php"); exit(); }
include "../model/DatabaseConnection.php";
$connection=new DatabaseConnection();
$conobj=$connection->OpenCon();
$myCourses = $connection->GetMyCourses($conobj,$_SESSION["Email"]);
$courseCount = $myCourses->num_rows;
$results = $connection->GetMyResults($conobj,$_SESSION["Email"]);
$resultCount = $results->num_rows;
$connection->CloseCon($conobj);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Dashboard</title>
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
        <h2>Student Dashboard</h2>
        <p>Welcome to your dashboard.</p>

        <div class="stat-cards">
            <div class="stat-card"><p>Enrolled Courses</p><h2><?php echo $courseCount; ?></h2></div>
            <div class="stat-card"><p>Quizzes Completed</p><h2><?php echo $resultCount; ?></h2></div>
        </div>
    </div>
</div>

</body>
</html>
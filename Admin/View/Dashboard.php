<?php
session_start();
if(!isset($_SESSION["Email"])){ header("location: Login.php"); exit(); }
include "../model/DatabaseConnection.php";
$connection=new DatabaseConnection();
$conobj=$connection->OpenCon();
$studentCount = $connection->CountRows($conobj,"student_reg");
$teacherCount = $connection->CountRows($conobj,"teacher_reg");
$courseResult = $connection->GetAllCourses($conobj);
$courseCount = $courseResult->num_rows;
$connection->CloseCon($conobj);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Dashboard</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body class="dashboard-page">

<div class="dashboard-header">
    <h2>EduQuiz</h2>
    <p>Welcome, <?php echo htmlspecialchars($_SESSION["Name"]); ?></p>
</div>

<div class="dashboard-container">
    <div class="dashboard-menu">
        <h3>Admin Panel</h3>
        <a href="Dashboard.php">Dashboard</a>
        <a href="Users.php">Users</a>
        <a href="Courses.php">Courses</a>
        <a href="../Control/logout.php">Logout</a>
    </div>

    <div class="dashboard-content">
        <h2>Admin Dashboard</h2>
        <p>Welcome to Admin Panel.</p>

        <div class="stat-cards">
            <div class="stat-card"><p>Students</p><h2><?php echo $studentCount; ?></h2></div>
            <div class="stat-card"><p>Teachers</p><h2><?php echo $teacherCount; ?></h2></div>
            <div class="stat-card"><p>Courses</p><h2><?php echo $courseCount; ?></h2></div>
        </div>
    </div>
</div>

</body>
</html>
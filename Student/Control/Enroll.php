<?php
include "../model/DatabaseConnection.php";
session_start();
if(!isset($_SESSION["Email"])){ header("location: ../View/Login.php"); exit(); }

$message="";
$connection=new DatabaseConnection();
$conobj=$connection->OpenCon();

if(isset($_POST["enroll"]))
{
    $connection->EnrollCourse($conobj,$_SESSION["Email"],$_POST["courseid"]);
    $message="Enrolled successfully.";
}

$available = $connection->GetAvailableCourses($conobj);
$myCourses = $connection->GetMyCourses($conobj,$_SESSION["Email"]);
$connection->CloseCon($conobj);
?>
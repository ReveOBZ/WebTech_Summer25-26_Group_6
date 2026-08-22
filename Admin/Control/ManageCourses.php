<?php
include "../model/DatabaseConnection.php";
session_start();
if(!isset($_SESSION["Email"])){ header("location: ../View/Login.php"); exit(); }

$message="";
$connection=new DatabaseConnection();
$conobj=$connection->OpenCon();

if(isset($_POST["add"]))
{
    $connection->AddCourse($conobj,$_POST["coursename"],$_POST["subject"],$_POST["teacheremail"]);
    $message="Course added successfully.";
}

if(isset($_POST["delete"]))
{
    $connection->DeleteCourse($conobj,$_POST["courseid"]);
    $message="Course deleted successfully.";
}

$courses = $connection->GetAllCourses($conobj);
$connection->CloseCon($conobj);
?>
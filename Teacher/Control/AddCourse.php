<?php
include "../model/DatabaseConnection.php";
session_start();
if(!isset($_SESSION["Email"])){ header("location: ../View/Login.php"); exit(); }

$message="";
$connection=new DatabaseConnection();
$conobj=$connection->OpenCon();

if(isset($_POST["add"]))
{
    $connection->AddCourse($conobj,$_POST["coursename"],$_POST["subject"],$_SESSION["Email"]);
    $message="Course added successfully.";
}

$courses = $connection->GetMyCourses($conobj,$_SESSION["Email"]);
$connection->CloseCon($conobj);
?>
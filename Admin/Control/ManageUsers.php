<?php
include "../model/DatabaseConnection.php";
session_start();
if(!isset($_SESSION["Email"])){ header("location: ../View/Login.php"); exit(); }

$message="";
$connection=new DatabaseConnection();
$conobj=$connection->OpenCon();

if(isset($_POST["delete"]))
{
    $table = $_POST["role"]=="Teacher" ? "teacher_reg" : "student_reg";
    $connection->DeleteUser($conobj,$table,$_POST["email"]);
    $message="User deleted successfully.";
}

$teachers = $connection->ShowAll($conobj,"teacher_reg");
$students = $connection->ShowAll($conobj,"student_reg");
$connection->CloseCon($conobj);
?>
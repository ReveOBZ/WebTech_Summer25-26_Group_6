<?php
include "../model/DatabaseConnection.php";
session_start();
if(!isset($_SESSION["Email"])){ header("location: ../View/Login.php"); exit(); }

$message="";
$connection=new DatabaseConnection();
$conobj=$connection->OpenCon();

if(isset($_POST["update"]))
{
    $connection->UpdateProfile($conobj,"student_reg",$_POST["name"],$_SESSION["Email"],$_POST["password"]);
    $_SESSION["Name"]=$_POST["name"];
    $message="Profile updated successfully.";
}

$results = $connection->GetMyResults($conobj,$_SESSION["Email"]);
$connection->CloseCon($conobj);
?>
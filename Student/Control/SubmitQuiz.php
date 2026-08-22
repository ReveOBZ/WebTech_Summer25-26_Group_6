<?php
include "../model/DatabaseConnection.php";
session_start();
if(!isset($_SESSION["Email"])){ header("location: ../View/Login.php"); exit(); }

$step="list";
$questions=null;
$quizId=0;
$score=0;
$total=0;
$status="";

$connection=new DatabaseConnection();
$conobj=$connection->OpenCon();

$myCourses = $connection->GetMyCourses($conobj,$_SESSION["Email"]);

if(isset($_POST["start"]))
{
    $quizId = $_POST["quiz"];
    $questions = $connection->GetQuestions($conobj,$quizId);
    $step="quiz";
}

if(isset($_POST["submit"]))
{
    $quizId = $_POST["quiz"];
    $questions = $connection->GetQuestions($conobj,$quizId);
    $total = $questions->num_rows;
    $answers = $_POST["answer"];

    $questions->data_seek(0);
    while($q = $questions->fetch_assoc())
    {
        if(isset($answers[$q["QuestionID"]]) && $answers[$q["QuestionID"]]==$q["CorrectOption"])
        {
            $score++;
        }
    }

    $status = ($score >= ($total/2)) ? "Pass" : "Fail";
    $connection->SaveResult($conobj,$_SESSION["Email"],$quizId,$score,$status);
    $step="result";
}

$quizList = null;
if($step=="list")
{
    $quizList = [];
    $myCourses->data_seek(0);
    while($c = $myCourses->fetch_assoc())
    {
        $qz = $connection->GetQuizzesForCourse($conobj,$c["CourseID"]);
        while($row = $qz->fetch_assoc())
        {
            $row["CourseName"]=$c["CourseName"];
            $quizList[] = $row;
        }
    }
}

$connection->CloseCon($conobj);
?>
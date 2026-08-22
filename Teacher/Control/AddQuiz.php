<?php
include "../model/DatabaseConnection.php";
session_start();
if(!isset($_SESSION["Email"])){ header("location: ../View/Login.php"); exit(); }

$message="";
$connection=new DatabaseConnection();
$conobj=$connection->OpenCon();

if(isset($_POST["add_quiz"]))
{
    $quizId = $connection->AddQuiz($conobj,$_POST["title"],$_POST["course"],5);

    $q = $_POST["question"];
    $a = $_POST["optiona"];
    $b = $_POST["optionb"];
    $c = $_POST["optionc"];
    $d = $_POST["optiond"];
    $correct = $_POST["correct"];

    for($i=0;$i<count($q);$i++)
    {
        if(trim($q[$i])!="")
        {
            $connection->AddQuestion($conobj,$quizId,$q[$i],$a[$i],$b[$i],$c[$i],$d[$i],$correct[$i]);
        }
    }
    $message="Quiz added successfully.";
}

$myCourses = $connection->GetMyCourses($conobj,$_SESSION["Email"]);
$quizzes = $connection->GetMyQuizzes($conobj,$_SESSION["Email"]);
$connection->CloseCon($conobj);
?>
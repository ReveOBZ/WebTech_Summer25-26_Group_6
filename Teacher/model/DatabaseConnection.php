<?php
class DatabaseConnection{

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "quiz";

 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }

function CheckUser($conn,$table,$Email,$password)
{
$result = $conn->query("SELECT * FROM ". $table." WHERE Email='". $Email."' AND Password='". $password."'");

if ($result->num_rows > 0)
{
    echo "Login Successful <br>";
}

else {
echo "Login Failed !<br>";
}
return $result;
}

function CheckUsername($conn,$table,$User)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE UserName like '".$User."' ");
    return $result;
}

function ShowData2($conn,$table,$Email)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE Email like '%".$Email."%' ");
    return $result;
}

function InsertData($conn,$table,$Name,$User,$email,$Password)
 {
    $check=false;
    $stmt=$conn->prepare("INSERT INTO ".$table." (FullName,UserName,Email,Password) VALUES(?,?,?,?)");
    $stmt->bind_param("ssss",$Name,$User,$email,$Password);
    if($stmt->execute())
    {
        echo "User Added Successfully!!";
        $check=true;
    }
    else
    {
        echo "Already have an account!!!<br>";
        echo $stmt->error;
    }
    $stmt->close();
    return $check;

 }

function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
return $result;
 }

function DeleteUser($conn,$table,$Email)
 {
     $sql="DELETE from $table where Email like '$Email'";
     if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    }
    else {
        $result= FALSE ;
    }
    return  $result;
 }

function UpdateProfile($conn,$table,$Name,$Email,$Password)
{
    if($Password!="")
    {
        $sql = "UPDATE $table SET FullName='$Name', Password='$Password' WHERE Email='$Email'";
    }
    else
    {
        $sql = "UPDATE $table SET FullName='$Name' WHERE Email='$Email'";
    }
    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    }
    else {
        $result= FALSE ;
    }
    return  $result;
}

function AddCourse($conn,$Name,$Subject,$TeacherEmail)
{
    $sql = "INSERT INTO courses (CourseName,Subject,TeacherEmail) VALUES ('$Name','$Subject','$TeacherEmail')";
    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    }
    else {
        $result= FALSE ;
    }
    return  $result;
}

function GetMyCourses($conn,$TeacherEmail)
{
    $result = $conn->query("SELECT * FROM courses WHERE TeacherEmail='$TeacherEmail'");
    return $result;
}

function AddQuiz($conn,$Title,$CourseID,$TotalMarks)
{
    $sql = "INSERT INTO quizzes (Title,CourseID,TotalMarks) VALUES ('$Title',$CourseID,$TotalMarks)";
    if ($conn->query($sql) === TRUE) {
        return $conn->insert_id;
    }
    return false;
}

function AddQuestion($conn,$QuizID,$QText,$A,$B,$C,$D,$Correct)
{
    $sql = "INSERT INTO questions (QuizID,QuestionText,OptionA,OptionB,OptionC,OptionD,CorrectOption) VALUES ($QuizID,'$QText','$A','$B','$C','$D','$Correct')";
    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    }
    else {
        $result= FALSE ;
    }
    return  $result;
}

function GetMyQuizzes($conn,$TeacherEmail)
{
    $result = $conn->query("SELECT quizzes.*, courses.CourseName FROM quizzes INNER JOIN courses ON quizzes.CourseID=courses.CourseID WHERE courses.TeacherEmail='$TeacherEmail'");
    return $result;
}

function GetResultsForTeacher($conn,$TeacherEmail)
{
    $result = $conn->query("SELECT results.*, quizzes.Title FROM results INNER JOIN quizzes ON results.QuizID=quizzes.QuizID INNER JOIN courses ON quizzes.CourseID=courses.CourseID WHERE courses.TeacherEmail='$TeacherEmail'");
    return $result;
}

function CloseCon($conn)
 {
    $conn -> close();
 }
}
?>
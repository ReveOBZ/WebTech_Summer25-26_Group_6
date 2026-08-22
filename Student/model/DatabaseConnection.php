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

function GetAvailableCourses($conn)
{
    $result = $conn->query("SELECT * FROM courses");
    return $result;
}

function EnrollCourse($conn,$StudentEmail,$CourseID)
{
    $sql = "INSERT INTO enrollments (StudentEmail,CourseID,Status) VALUES ('$StudentEmail',$CourseID,'Enrolled')";
    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    }
    else {
        $result= FALSE ;
    }
    return  $result;
}

function GetMyCourses($conn,$StudentEmail)
{
    $result = $conn->query("SELECT courses.* FROM enrollments INNER JOIN courses ON enrollments.CourseID=courses.CourseID WHERE enrollments.StudentEmail='$StudentEmail'");
    return $result;
}

function GetQuizzesForCourse($conn,$CourseID)
{
    $result = $conn->query("SELECT * FROM quizzes WHERE CourseID=$CourseID");
    return $result;
}

function GetQuestions($conn,$QuizID)
{
    $result = $conn->query("SELECT * FROM questions WHERE QuizID=$QuizID");
    return $result;
}

function SaveResult($conn,$StudentEmail,$QuizID,$Score,$Status)
{
    $sql = "INSERT INTO results (StudentEmail,QuizID,Score,Status) VALUES ('$StudentEmail',$QuizID,$Score,'$Status')";
    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    }
    else {
        $result= FALSE ;
    }
    return  $result;
}

function GetMyResults($conn,$StudentEmail)
{
    $result = $conn->query("SELECT results.*, quizzes.Title FROM results INNER JOIN quizzes ON results.QuizID=quizzes.QuizID WHERE results.StudentEmail='$StudentEmail'");
    return $result;
}

function CloseCon($conn)
 {
    $conn -> close();
 }
}
?>
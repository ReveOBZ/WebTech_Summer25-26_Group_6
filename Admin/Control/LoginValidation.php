<?php
include "../model/DatabaseConnection.php";
session_start();

$validateemail="";
$validatepassword="";
$loginInfo="";
$hasError=false;

if(isset($_POST["Login"]))
{
    $email=$_REQUEST["email"];
    $Password=$_REQUEST["password"];

    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    {
        $hasError=true;
        $validateemail="You Must Enter Valid Email";
    }

    if(strlen($Password)<8 || empty($Password))
    {
        $hasError=true;
        $validatepassword=" Password Must Contain 8 character!!";
    }

    if($hasError==false)
    {
        $connection=new DatabaseConnection();
        $conobj=$connection->OpenCon();
        $result=$connection->CheckUser($conobj,"admin_reg",$email,$Password);
        $connection->CloseCon($conobj);

        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $_SESSION["Email"]=$email;
                $_SESSION["Name"]=$row["FullName"];
                $_SESSION["UserName"]=$row["UserName"];
            }
            header("location: ../View/Dashboard.php");
        }
        else
        {
            $loginInfo="Login Failed !!";
        }
    }
}
?>
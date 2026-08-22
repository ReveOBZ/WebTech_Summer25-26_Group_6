<?php
$Name="";
$email="";
$validatepassword="";
$validateconfirmpassword="";
$validateemail=$ValidUserName="";
$Password="";
$User="";
$Var_Name=$Var_Email=$Var_Password="";
$hasError=false;
$dbValidation=false;

if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["Register"]))
{
$Name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$Password=$_REQUEST["password"];
$ConfirmPassword=$_REQUEST["confirmpassword"];
$User=$_REQUEST["username"];
$User=lcfirst($User);

if(empty($Name) || strlen($Name)<3)
{
    $hasError=true;
}
else
    $Var_Name=$Name;

if(strlen($User)<5)
{
    $hasError=true;
    $ValidUserName="Username must contain 5 character";
}
else if(ctype_upper($User))
{
    $ValidUserName="Username must be small letter";
}

if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="You Must Enter Valid Email";
    $hasError=true;
}
else{
    $Var_Email=$email;
}

if(strlen($Password)<8 || empty($Password))
{
    $validatepassword=" Password Must Contain 8 character!!";
    $hasError=true;
}
else if(ctype_lower($Password))
{
    if(ctype_upper($Password))
    {
    }
    else
    {
        $validatepassword= "Password Must contain upper case and lower case";
        $hasError=true;
    }
}
else if(is_numeric($Password))
{
    $validatepassword= "Password Must contain number-letter-special Character";
    $hasError=true;
}
else if (!str_contains($Password,'?')) {
    $hasError = true;
    $validatepassword= "Password Must contain ? and #";
}
else if (!str_contains($Password,'#')) {
    $hasError = true;
    $validatepassword= "Password Must contain ? and #";
}
else{
    $Var_Password=$Password;
}

if(empty($ConfirmPassword))
{
    $validateconfirmpassword="Confirm Password Cannot be empty !!!";
    $hasError=true;
}
else if($ConfirmPassword != $Password)
{
    $validateconfirmpassword="Password and Confirm Password must match!!";
    $hasError=true;
}

if($hasError==false)
{
    include "../model/DatabaseConnection.php";
    $connection=new DatabaseConnection();
    $conobj=$connection->OpenCon();
    $dbValidation=$connection->InsertData($conobj,"teacher_reg",$Var_Name,$User,$Var_Email,$Var_Password);
    $connection->CloseCon($conobj);
}

}
?>
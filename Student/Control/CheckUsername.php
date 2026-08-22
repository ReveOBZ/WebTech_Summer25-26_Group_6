<?php
include "../model/DatabaseConnection.php";
$Username=$_POST["Username"];

if($Username=="")
{
    echo "";
}
else
{
    $connection=new DatabaseConnection();
    $conobj=$connection->OpenCon();
    $result=$connection->CheckUsername($conobj,"student_reg",$Username);
    if ($result->num_rows > 0)
    {
       echo "Username Already Used";
    }
    else{
       echo "Unique Username";
    }
    $connection->CloseCon($conobj);
}
?>
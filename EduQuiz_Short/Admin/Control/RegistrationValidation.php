<?php
include "../../model/DatabaseConnection.php";
$message="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=trim($_POST["name"] ?? "");
    $username=trim($_POST["username"] ?? "");
    $email=trim($_POST["email"] ?? "");
    $phone=trim($_POST["phone"] ?? "");
    $department=trim($_POST["department"] ?? "");
    $role=$_POST["role"] ?? "student";
    $password=trim($_POST["password"] ?? "");
    $confirm=trim($_POST["confirm"] ?? "");

    if(empty($name) || empty($username) || empty($email) || empty($password))
    {
        $message="Required fields cannot be empty";
    }
    else if($role!="admin" && $role!="instructor" && $role!="student")
    {
        $message="Invalid account type";
    }
    else if(strlen($password)<4)
    {
        $message="Password must be at least 4 characters";
    }
    else if($password!=$confirm)
    {
        $message="Passwords do not match";
    }
    else
    {
        $database=new DatabaseConnection();
        $connection=$database->OpenCon();

        $name=$connection->real_escape_string($name);
        $username=$connection->real_escape_string($username);
        $email=$connection->real_escape_string($email);
        $phone=$connection->real_escape_string($phone);
        $department=$connection->real_escape_string($department);
        $password=$connection->real_escape_string($password);
        $role=$connection->real_escape_string($role);

        $check=$connection->query("SELECT * FROM users WHERE username='$username' OR email='$email'");

        if($check->num_rows>0)
        {
            $message="Email or username already exists";
        }
        else
        {
            $sql="INSERT INTO users(name,username,email,password,phone,department,role) VALUES('$name','$username','$email','$password','$phone','$department','$role')";
            if($connection->query($sql))
            {
                Header("Location:Login.php");
                exit();
            }
            else
            {
                $message="Registration failed";
            }
        }
    }
}
?>

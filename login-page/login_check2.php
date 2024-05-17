<?php


error_reporting(0);
session_start();

$host="localhost";
$user="root";
$password="";
$db="grps";


$con=mysqli_connect($host, $user, $password, $db, 3307);

if($con===false)
{
    die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];

    $sql="select * from login where username= '".$username."' AND password='".$password."'";

    $result=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($result);

    if($row["user_type"]=="student")
    {   
        $_SESSION["username"]=$username;
        $_SESSION["usert_type"] = "student";
        header("location:../student-page/bsit-first-yr.php");
    }

    else
    {
        session_start();
        $message = "Username or password do not match!";

        $_SESSION['loginMessage'] = $message;

        header("location:login-stud.php");
    }

}
?>

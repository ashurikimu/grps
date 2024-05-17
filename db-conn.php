<?php

error_reporting(0);
session_start();

$host="localhost";
$user="root";
$password="";
$db="grps";


$con = mysqli_connect($host, $user, $password, $db, 3307);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . htmlspecialchars(mysqli_connect_error());
    exit();
}
?>

<?php
session_start();


$conn = mysqli_connect('127.0.0.1:3307','root',"Cacatmaro97","site_db");

if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}

$loginEmail = $_POST['loginEmail'];
$loginPwd = $_POST['loginPwd'];


$sql = "SELECT * FROM users WHERE email = '$loginEmail' AND pwd='$loginPwd'";



$result = mysqli_query($conn,$sql);


if(!$row = mysqli_fetch_assoc($result))
{
    $_SESSION['user'];
}
else
{
    $_SESSION['user'] = $row['id'];
}


header("Location: ../principal_page.php");



?>
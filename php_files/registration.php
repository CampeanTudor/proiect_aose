<?php

$conn = mysqli_connect("localhost","root","","site_db");

if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}

$newEmail= $_POST['newEmail'];
$newPwd= $_POST['newPwd'];
$newPwdConf= $_POST['newPwdConf'];
$newAddress= $_POST['newAddress'];
$newTown= $_POST['newTown'];
$newState= $_POST['newState'];


$sql = "INSERT INTO users (email,pwd,address,towm,state) VALUES ('$newEmail','$newPwd','$newAddress','$newTown','$newState')";


$result = mysqli_query($conn,$sql);


header("Location: ../principal_page.php");

?>
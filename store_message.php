<?php
$con = mysqli_connect("localhost","root","",project3);
$name = mysqli_real_escape_string($_POST["name"]);
$email = mysqli_real_escape_string($_POST["emai"]);
$subject = mysqli_real_escape_string($_POST["subject"]);
$message = mysqli_real_escape_string($_POST["message"]);

$sql ="insert into message(name,email,subject,message) values('".$name."','".$email."','".$subject."','".$message."')";
mysqli_query($con,$sql) or dir("Error: ".mysqli_error());
mysqli_close($con);
?>
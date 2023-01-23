<?php

$con = mysqli_connect('localhost', 'root', '','builders');
// get the post data
$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$txtMessage = $_POST['message'];
$txtPhoneNumber = $_POST['PhoneNumber'];
$subject = $_POST['subject'];
// database insert SQL code
$sql = "INSERT INTO Contact(Name, Email, Message, PhoneNumber,subject) VALUES ('$txtName', '$txtEmail', '$txtMessage', '$txtPhoneNumber','$subject')";
$rs = mysqli_query($con, $sql);

if($rs)
{
	header('Location: index.php');
}
?>
<?php


include 'connection.php';


if(isset($_POST['submit']))
{

	$name = $_POST['username'];
	$email = $_POST['useremail'];
	$message = $_POST['message'];

$insertQuery = "INSERT INTO chatting(`name`,`email`,`message`) values($name,$email,$message)";

}

?>
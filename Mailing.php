<?php

	$to_mail = "gouthamkumarpolapally@gmail.com";
	$subject ="Thank You For Registarion".$_SESSION['username'];
	$body = "Hi, this is goutham";

	$headers  = "From: goutham.190422@gmail.com";

	if(mail($to_mail, $subject, $body, $headers))
	{
		echo "mail has been sent to ";
	}
	else{
		echo "there is problem while sending mail to :".$to_mail;
	}
?>
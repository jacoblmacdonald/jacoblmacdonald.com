<?php
	$email = htmlspecialchars($_POST["email"]);
	$subject = htmlspecialchars($_POST["subject"]);
	$body = htmlspecialchars($_POST["body"]);

	if($email == "" || $body == "") {
		die("Please fill out the whole form.");
	}
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    	die("Invalid email.");
	}
	
	mail("jacob@jacoblmacdonald.com", $subject, $body, "From: $email");
?>
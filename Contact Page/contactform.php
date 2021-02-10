<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];
	
	$mailTo = "engineerboy002@gmail";
	$headers = "From: ".$mailFrom;
	$txt = "You Have Received An e-mail from".$name.".\n\n".$message;
	
	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.php?mailsend");
}
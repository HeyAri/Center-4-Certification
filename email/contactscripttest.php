<?php
	// VALUES FROM THE FORM
	$fullName		= $_POST['fullName'];
	$email		= $_POST['email'];
	$certification	= $_POST['certification'];


	// CREATE THE EMAIL
	$headers	= "Content-Type: text/plain; charset=iso-8859-1\n";
	$headers	.= "From: $fullName <$email>\n";
	$recipient	= "heyari@a2plcpnl0903.prod.iad2.secureserver.net";
	$subject	= "Someone Certified Themselves";
	$message	= wordwrap($certification, 1024);

	// SEND THE EMAIL TO YOU
	mail($recipient, $subject, $message, $headers);

	// REDIRECT TO THE THANKS PAGE
	header("location: thanks.php");
?>

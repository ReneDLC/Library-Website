<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
</head>
<body>
	<?php
		
		//Get the date from the form
		//This version has no error checking
		$customeremail = $_POST["customeremail"];
		$message = $_POST["message"];
		$replywanted = false;
		if(isset($_POST["replywanted"]))
			$replywanted = true;
		
		//Build the text of the email
		$t = "You have received a message from " . $customeremail . " :\n";
		$t = $t . $message . "\n";
		if($replywanted)
			$t = $t . "A reply was requested";
		else
			$t = $t . "No reply was requested";
		
		//Send an email to the librarian
		//mail("Customer email", "Customer Message", $t);
		
		//Give the user a nice warm fuzzy feeling
		echo "Thank you. Your message has been sent";
	?>
</body>
</html>
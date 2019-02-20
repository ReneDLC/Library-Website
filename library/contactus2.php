<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
</head>
<body>
	<?php
		//Get the date from the form
		//This version has basic error checking
		if($_POST["customeremail"] == ""){
			echo "You did not enter an email address";
			exit;
		}
		
		if(! preg_match("/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/", $_POST["customeremail"]))
		{
			echo "Email address is not valid";
			exit;
		}
	?>
</body>
</html>
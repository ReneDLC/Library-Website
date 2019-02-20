<!DOCTYPE html>
<html>
	<head>
		<title>Book Reservation Confirmation</title>
	</head>
	<body>
		<?php
			//Get the title of the book we're reserving (from the URL)
			$booktoreserve = urldecode($_GET['reservation']);
			session_start();
			if(!isset($_SESSION['reservedbooklist'])){
				$reservedbooklist = "";
			}
			else{
				$reservedbooklist = $_SESSION['reservedbooklist'];
			}
			//The list is maintained as a single string
			//with the titles seperated by slashes
			$reservedbooklist = $reservedbooklist . "/" . $booktoreserve;
			$_SESSION['reservedbooklist'] = $reservedbooklist;
			echo "Thank you. $booktoreserve has been added to your reservation list";
		?>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<title>List reserved books</title>
	</head>
	<body>
		<?php
			session_start();
			if(!isset($_SESSION['reservedbooklist'])){
				echo "You have no reserved books";
				exit;
			}
			echo "You have reserved these books: <br> <br>";
			//The list is maintained as a single string
			//with the titles seperated by slashes
			//Split the list into seperate titlesw and print them out 
			$reservedbooklist = explode("/", $_SESSION['reservedbooklist']);
			foreach($reservedbooklist as $reservedbook){
				echo $reservedbook . "<br>";
			}
		?>
	</body>
</html>
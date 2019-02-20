<?php
	
	$bookid = trim($_GET['bookid']);	
	$bookid = addslashes($bookid);
	
	try{
		$db = new PDO("mysql:host=localhost;dbname=library", "assistant", "assistantpw");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		printf("Unable to open database: %s\n", $e->getMessage());
		printf("<br><a href=index.php>Return to home page</a>");
		exit;
	}
	try{
		$stmt = $db->prepare("update books set onloan=0, duedate=NULL, borrowerid=NULL where bookid=?");
		$stmt->execute(array("$bookid"));
	}catch(PDOException $e){
		printf("Unable to check in book: %s\n", $e->getMessage());
		printf("<br><a href=index.php>Return to home page</a>");
		exit;
	}
	
	printf("<br>Book Checked Out!");
	printf("<br><a href=index.php>Return to home page</a>");
	exit;
?>
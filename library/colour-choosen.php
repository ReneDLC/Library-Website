<!DOCTYPE html>
<?php
	//Build the array of colour choices
	$colours = array("Pink" => "f0d0d0",
					"Violett" => "cda8ef",
					"Blue" => "a8clef",
					"Green" => "a8efab",
					"Yellow" => "efee7b" );
	//If this is a postback, create the cookie
	if(isset($_GET['colourchosen']))
		setcookie('colourpreference', $colours[$_GET['colourchosen']], time() + 24*3600, "/");
?>
<html>
	<head>
		<title>Choose Colout Preference</title>
	</head>
	<body>
		<?php
			if(isset($_GET['colourchosen'])){
				//This is the postback so just thank the user
				echo "Your color preference has been recorded";
				exit;
			}
			//Not a postback, so present the colour selection form:
		?>
		<form action="colour-chosen.php" method="GET">
			<table>
				<tbody>
					<tr>
						<td>Choose your colour:</td>
						<td>
							<select size="1" name="colourchosen">
								<?php
									//Populate drop-down from array of colour choices
									foreach($colours as $name => $hex){
										echo "<option> " . $name;
									}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan = "2">
							<input type="submit" name="Confirm" value="Confirm Preference">
						</td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</form>
	</body>
</html>
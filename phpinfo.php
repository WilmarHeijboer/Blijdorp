<?php
$host = "localhost";
$dbname = "test";
$username = "root";
$password = "";

$con = new PDO("mysql:host=$host;dbname", $username, $password)
?>
<!DOCTYPE html>
<html>
<head>
	<title>Voorbeeld form</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="voornaam"/>
		<input type="text" name="achternaam"/>
		<input type="submit" name="btnVerstuur"/> 
	</form>
	<?php
	echo "Voornaam: ".$_POST["voornaam"]."<br/>";
	echo "Achternaam: ".$_POST["achternaam"];
	?>
	
</body>
</html>

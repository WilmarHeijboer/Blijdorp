<html>

	<head>

	</head>

	<body>
	<form method="post">
		gebruiker<input type="text" name="gebruiker"/><br>
		wachtwoord<input type="password" name="wachtwoord"/><br>
		<input type="submit" name="btnLogin" value="Login"/>
	</form>
	</body>
<?php

session_start();

$_SESSION['gebruiker'] = 'Peter Jansen';

echo $_SESSION['gebruiker'];

?>

</html>
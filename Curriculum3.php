<?php
$host = "localhost";
$dbname = "curriculum3";
$username = "root";
$password = "";

$con = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
?>
<!DOCTYPE html>
<html>
	<head>
	  <title>Curriculum Vitae "ovnummer"</title>
	  <style>
		body{
			background-color: red
		    }
			blockquote{
			    color: black
			}
		</style>
	</head>	
	<body>
	<h1>Curriculum Vitae<br/></h1>
			<form method='POST'>
			
		<select>
		<option>Geslacht</option>
		<option>Men</option>
		<option>woman</option>
		<input type="submit" name="btnverstuur"/>
		</select>
		</form method='POST'>
	<?php
	if(isset($_POST["btnverstuur"])){
		if(empty($_POST["Naam"])){
			echo "Er is geen voornaam ingevuld!<br/>";
		} else {
			echo "Naam: " . $_POST["Naam"] . "<br/>";
		}
	}		
		
	
	?>
	<form method="POST">
	<blockquote></blockquote>
	<blockquote>Name: <input type="text" name="Naam"/></blockquote>
	<blockquote>Adress: <input type="text" name="Adres"/></blockquote>
	<blockquote>Postal code: <input type="text" name="Postcode"/></blockquote>
	<blockquote>Residence: <input type="text" name="Woonplaats"/></blockquote>
	<blockquote>Phone: <input type="text" name="Telefoon"/></blockquote>
	<blockquote>E-mail: <input type="text" name="E-mail"/></blockquote>
	<blockquote>Date of birth: <input type="text" name="Geboortedatum"/></blockquote>
	<blockquote>Nationality: <input type="text" name="Nationaliteit"/></blockquote>
	
	
	<hr/>
	
	<h2>Work experience<br/></h2>
	<blockquote><input type="text" name="Werkervaring1"/></blockquote>
	<blockquote><input type="text" name="Werkervaring2"/></blockquote>	
	<blockquote><input type="text" name="Werkervaring3"/></blockquote>
	
	
	<h2>Education<br/></h2>
	<blockquote><input type="text" name="Opleiding1"/></blockquote>
	<blockquote><input type="text" name="Opleiding2"/></blockquote>
	<blockquote><input type="text" name="Opleiding3"/></blockquote>
	
	
	<h2>Activities<br/></h2>
	<blockquote><input type="text" name="Activiteiten1"/></blockquote>
	<blockquote><input type="text" name="Activiteiten2"/></blockquote>
	<blockquote><input type="text" name="Activiteiten3"/></blockquote>
	<br/><input type="submit" name="btnverstuur"/>
	</form method='POST'>
	<?php
		if(isset($_POST["btnverstuur"])){
			if(empty($_POST["Naam"])){
				echo "Er is geen naam ingevuld!<br/>";
			} else {
				echo "Naam: " . $_POST["Naam"] . "<br/>";
			}
		}
		if(isset($_POST["btnverstuur"])){
			if(empty($_POST["Adres"])){
				echo "Er is geen adres ingevuld!<br/>";
			} else {
				echo "Adres: " . $_POST["Adres"] . "<br/>";
			}
		}
		if(isset($_POST["btnverstuur"])){
			if(empty($_POST["Postcode"])){
				echo "Er is geen postcode ingevuld!<br/>";
			} else {
				echo "Postcode: " . $_POST["Postcode"] . "<br/>";
			}
		}
		if(isset($_POST["btnverstuur"])){
			if(empty($_POST["Woonplaats"])){
				echo "Er is geen woonplaats ingevuld!<br/>";
			} else {
				echo "Woonplaats: " . $_POST["Woonplaats"] . "<br/>";
			}
		}
		if(isset($_POST["btnverstuur"])){
			if(empty($_POST["Telefoon"])){
				echo "Er is geen telefoon ingevuld!<br/>";
			} else {
				echo "Telefoon: " . $_POST["Telefoon"] . "<br/>";
			}
		}
		if(isset($_POST["btnverstuur"])){
			if(empty($_POST["E-mail"])){
				echo "Er is geen e-mail ingevuld!<br/>";
			} else {
				echo "E-mail: " . $_POST["E-mail"] . "<br/>";
			}
		}
		if(isset($_POST["btnverstuur"])){
			if(empty($_POST["Geboortedatum"])){
				echo "Er is geen geboortedatum ingevuld!<br/>";
			} else {
				echo "Geboortedatum: " . $_POST["Geboortedatum"] . "<br/>";
			}
		}
		if(isset($_POST["btnverstuur"])){
			if(empty($_POST["Nationaliteit"])){
				echo "Er is geen nationaliteit ingevuld!<br/>";
			} else {
				echo "Nationaliteit: " . $_POST["Nationaliteit"] . "<br/>";
			}
		}
		if(isset($_POST["btnverstuur"])){
			if(empty($_POST["Werkervaring1"])){
				echo "Er is geen werkervaring ingevuld!<br/>";
			} else {
				echo "Werkervaring: " . $_POST["Werkervaring1"] . "<br/>";
			}
		}
		if(isset($_POST["btnverstuur"])){
			if(empty($_POST["Werkervaring1"])){
				echo "Er is geen werkervaring ingevuld!<br/>";
			} else {
				echo "Werkervaring: " . $_POST["Werkervaring1"] . "<br/>";
			}
		}
		if(isset($_POST["btnverstuur"])){
			if(empty($_POST["Werkervaring2"])){
				echo "Er is geen werkervaring ingevuld!<br/>";
			} else {
				echo "Werkervaring: " . $_POST["Werkervaring2"] . "<br/>";
			}
		}
				if(isset($_POST["btnverstuur"])){
			if(empty($_POST["Werkervaring3"])){
				echo "Er is geen werkervaring ingevuld!<br/>";
			} else {
				echo "Werkervaring: " . $_POST["Werkervaring3"] . "<br/>";
			}
		}
		if(isset($_POST["btnverstuur"])){
			if(empty($_POST["Opleiding1"])){
				echo "Er is geen opleiding ingevuld!<br/>";
			} else {
				echo "Opleiding: " . $_POST["Opleiding1"] . "<br/>";
			}
		}
		if(isset($_POST["btnverstuur"])){
			if(empty($_POST["Opleiding2"])){
				echo "Er is geen opleiding ingevuld!<br/>";
			} else {
				echo "Opleiding: " . $_POST["Opleiding2"] . "<br/>";
			}
		}
		if(isset($_POST["btnverstuur"])){
			if(empty($_POST["Opleiding3"])){
				echo "Er is geen opleiding ingevuld!<br/>";
			} else {
				echo "Opleiding: " . $_POST["Opleiding3"] . "<br/>";
			}
		}
		if(isset($_POST["btnverstuur"])){
			if(empty($_POST["Activiteiten1"])){
				echo "Er is geen activiteit ingevuld!<br/>";
			} else {
				echo "Activiteiten: " . $_POST["Activiteiten1"] . "<br/>";
			}
		}
		if(isset($_POST["btnverstuur"])){
			if(empty($_POST["Activiteiten2"])){
				echo "Er is geen activiteit ingevuld!<br/>";
			} else {
				echo "Activiteiten: " . $_POST["Activiteiten2"] . "<br/>";
			}
		}
		if(isset($_POST["btnverstuur"])){
			if(empty($_POST["Activiteiten3"])){
				echo "Er is geen activiteit ingevuld!<br/>";
			} else {
				echo "Activiteiten: " . $_POST["Activiteiten3"] . "<br/>";
			}
		}
	
	
	
	
	
	
	?>
	
	
	
	
	
	
	
	
	
	
	</body>
	
</html>
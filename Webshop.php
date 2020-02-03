<?php
$host = "localhost";
$dbname = "webshop";
$username = "root";
$password = "";

$con = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Webshop "D263436"</title>
		<link rel="stylesheet" href="style.css"><div style="background-image: url('tiger1.jpg');">
</head>
<body>
	<form method="post">
	<h1>Meld je hier aan voor een gratis workshop!</h1>
	<h2>Maximaal 20 personen per workshop.</h2>	
	<b>Aanhef:</b>
	<select name="Aanhef" id="Aanhef">
		<option value="Dhr.">Dhr.</option>
		<option value="Mvr.">Mvr.</option>
	</select>
<FIELDSET>
	<LEGEND>Geslacht</LEGEND>
	<input type="RADIO" value="Man" name="Geslacht"/>Man
	<input type="RADIO" value="Vrouw" name="Geslacht"/>Vrouw
</FIELDSET><br/>
<FIELDSET>
<LEGEND>DAG<LEGEND/>
	<input type="RADIO" value="Dinsdag 12 februari 2019 van 09.00u-13.00u" name="Dag"/> Dinsdag 12 februari 2020 van 09.00u-13.00u.</option>
	<input type="RADIO" value="Woensdag 13 februari 2019 van 13.00u-17.00u" name="Dag"/> Woensdag 13 februari 2020 van 13.00u-17.00u.</option>
</FIELDSET><br/>
Naam:<input type="Text" name="Naam"/><br/>
Adres:<input type="Text" name="Adres"/><br/>
Postcode:<input type="Text" name="Postcode"/><br/>
Woonplaats:<input type="Text" name="Woonplaats"/><br/>
Telefoon:<input type="Text" name="Telefoon"/><br/>
E-mail:<input type="Text" name="E-mail"/><br/>

<input type="submit" name="btnVerstuur" value="Meld aan" />
</FORM>
<?php
if(isset ($_POST["btnVerstuur"])) {
	
			$lijst = array();
			
			if (empty($_POST["Aanhef"])) {
				echo "Er is geen aanhef ingevuld!" . "<br/>";
			} else {
				echo "Aanhef: " . $_POST["Aanhef"] . "<br/>";
				$lijst[0] = $_POST["Aanhef"];
			}
			
			if (empty($_POST["Geslacht"])) {
				echo "Er is geen geslacht ingevuld!" . "<br/>";
			} else {
				echo "Geslacht: " . $_POST["Geslacht"] . "<br/>";
				$lijst[1] = $_POST["Geslacht"];
			}
			
			if (empty($_POST["Dag"])) {
				echo "Er is geen dag ingevuld!" . "<br/>";
			} else {
				echo "Dag: " . $_POST["Dag"] . "<br/>";
				$lijst[2] = $_POST["Dag"];
			}
			
			if (empty($_POST["Naam"])) {
				echo "Er is geen naam ingevuld!" . "<br/>";
			} else {
				echo "Naam: " . $_POST["Naam"] . "<br/>";
				$lijst[3] = $_POST["Naam"];
			}
			
			if (empty($_POST["Adres"])) {
				echo "Er is geen adres ingevuld!" . "<br/>";
			} else {
				echo "Adres: " . $_POST["Adres"] . "<br/>";
				$lijst[4] = $_POST["Adres"];
			}

			if (empty($_POST["Postcode"])) {
				echo "Er is geen postcode ingevuld!" . "<br/>";
			} else {
				echo "Postcode: " . $_POST["Postcode"] . "<br/>";
				$lijst[5] = $_POST["Postcode"];
			}
			
			if (empty($_POST["Woonplaats"])) {
				echo "Er is geen woonplaats ingevuld!" . "<br/>";
			} else {
				echo "Woonplaats: " . $_POST["Woonplaats"] . "<br/>";
				$lijst[6] = $_POST["Woonplaats"];
			}
			
			if (empty($_POST["Telefoon"])) {
				echo "Er is geen telefoon ingevuld!" . "<br/>";
			} else {
				echo "Telefoon: " . $_POST["Telefoon"] . "<br/>";
				$lijst[7] = $_POST["Telefoon"];
			}
			
			if (empty($_POST["E-mail"])) {
				echo "Er is geen e-mail ingevuld!" . "<br/>";
			} else {
				echo "E-mail: " . $_POST["E-mail"] . "<br/>";
				$lijst[8] = $_POST["E-mail"];
			}

		
		$query = "INSERT INTO klantgegevens VALUES ".
        "('$lijst[0]','$lijst[1]','$lijst[2]','$lijst[3]','$lijst[4]','$lijst[5]','$lijst[6]','$lijst[7]','$lijst[8]')";
		
		$stm = $con->prepare($query);
			if($stm->execute())
			{
				echo "correct uitgevoerd zit in db";
			}else echo "query in db mislukt";
			}
		
?>
<?php
function rowCount($con, $query) {
    $stm = $con->prepare($query);
    $stm->execute();
    return $stm->rowCount();
}
?>
   <h2>Overzicht alles = <?php echo rowCount($con,"SELECT * FROM `Dag`");?>
</h2>
("SELECT count(*) FROM klantgegevens WHERE Dag like 'Di'");
<h2>Overzicht Di = <?php echo rowCount($con,"SELECT * FROM `webshop` WHERE Dag = 'Dinsdag 12 februari 2020 van 09.00u – 13.00u'");?></h2>

("SELECT count(*) FROM klantgegevens WHERE Dag like 'wo'");
<h2>Overzicht wo = <?php echo rowCount($con,"SELECT * FROM `webshop` WHERE Dag = 'Woensdag 13 februari 2020 van 13.00 - 17.00'");?></h2>
</select>
</body>
</html>



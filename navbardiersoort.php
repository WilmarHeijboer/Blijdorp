<?php
$host = "localhost";
$dbname = "blijdorp";
$username = "root";
$password = "";

$con = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);


?>
<!DOCTYPE html>
<html>
<body>
<div style="background-image: url('tiger1.jpg');">
</body>
<head>
    <title>Plattegrond</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css%22/%3E"/>
    <link rel="stylesheet" href="BlijdorpStyle3.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css%22/%3E"/>

</head>
<body>
<div style="background-image: url('tiger1.jpg');">
<div class="topnav">
  <a class="active" href="Blijdorp.php">Home</a>
  <a href="navbardieren.php">Dieren</a>
  <a href="navbarverblijven.php">Verblijfplaatsen</a>
  <a href="navbarplattegrond.php">Plattegrond</a>
  <a href="navbarverblijfzoeken.php">Verblijf zoeken</a>
  <a href="navbartoevoegen.php">Dier toevoegen</a>
  <a href="navbardiersoort.php">Overzicht</a>
  <a href="navbarcontact.php">Contact</a>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Type hier wat u zoekt" name="search";>
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
<table>
<?php

$query = "SELECT * FROM dieren ORDER BY soort";
	$stm = $con->prepare($query);
	if($stm->execute())
	{
		$Data = $stm->fetchALL(PDO::FETCH_OBJ);
		foreach($Data as $row)
		{
			echo $row->soort . "<br>"; 
			echo $row->verblijfplaats . "<br>";
			echo $row->gedrag . "<br>";
			echo "<br>" . "<br>" . "<br>";
			
		
		}
	}
	?>
</table>
</body>
</html>
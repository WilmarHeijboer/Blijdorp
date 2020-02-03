<?php
$host = "localhost";
$dbname = "blijdorp";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
?>
<!DOCTYPE html>
<html>
<body>
<div style="background-image: url('tiger1.jpg');">
</body>
<head>
    <title>Dier toevoegen</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css%22/%3E"/>
    <link rel="stylesheet" href="BlijdorpStyle3.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css%22/%3E"/>

</head>
<body>
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
<form method="post">
		<p>DierID:</p><input type="Text" name="dierID"/><br/>
        <p>Soort:</p><input type="Text" name="soort"/><br/>
        <p>Geslacht:</p><input type="Text" name="geslacht"/><br/>
        <p>Verblijfplaats:</p><input type="Text" name="verblijfplaats"/><br/>
        <p>Type:</p><input type="Text" name="type"/><br/>
		<p>Gedrag:</p><input type="Text" name="gedrag"/><br/>
        <input type="submit" name="btnVerstuur" value="Submit"/>
    </form>

<?php
if (isset($_POST["btnVerstuur"])) {

    $lijst = array();

    if (empty($_POST["dierID"])) {
        echo "Er is geen dierID ingevuld!" . "<br/>";
    } else {
        echo "dierID: " . $_POST["dierID"] . "<br/>";

        $lijst[0] = $_POST["dierID"];
    }
    echo "<br>";
    if (empty($_POST["soort"])) {
        echo "Er is geen soort ingevuld!" . "<br/>";
    } else {
        echo "soort: " . $_POST["soort"] . "<br/>";

        $lijst[1] = $_POST["soort"];
    }
    echo "<br>";
    if (empty($_POST["geslacht"])) {
        echo "Er is geen geslacht ingevuld!" . "<br/>";
    } else {
        echo "geslacht: " . $_POST["geslacht"] . "<br/>";

        $lijst[2] = $_POST["geslacht"];
    }
    echo "<br>";
    if (empty($_POST["verblijfplaats"])) {
        echo "Er is geen Soort ingevuld!" . "<br/>";
    } else {
        echo "verblijfplaats: " . $_POST["verblijfplaats"] . "<br/>";

        $lijst[3] = $_POST["verblijfplaats"];
    }
    echo "<br>";
    if (empty($_POST["type"])) {
        echo "Er is geen type ingevuld!" . "<br/>";
    } else {
        echo "type: " . $_POST["type"] . "<br/>";

        $lijst[4] = $_POST["type"];
    }
    echo "<br>";
	if (empty($_POST["gedrag"])) {
        echo "Er is geen gedrag ingevuld!" . "<br/>";
    } else {
        echo "gedrag: " . $_POST["gedrag"] . "<br/>";

        $lijst[5] = $_POST["gedrag"];
    }
    echo "<br>";

    $query = "INSERT INTO dieren VALUES ".
        "('$lijst[0]','$lijst[1]','$lijst[2]','$lijst[3]','$lijst[4]','$lijst[5]')";


    $stm = $conn->prepare($query);
    if($stm->execute())
    {
        echo "correct uitgevoerd zit in db!";
    }else echo "query in db mislukt!";

}
?>
</body>
</html>



<? php

$host= "localhost";
$dbnaam= "vuurwerkwinkel";
$gebruiker= "root";
$wachtwoord= "";

$conn = new PDO("mysql:host=$host;dbname=$dbnaam",
				$gebruiker, $wachtwoord) or die ("Verbinding mislukt");


?>
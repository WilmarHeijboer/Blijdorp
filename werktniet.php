<?php 
$host = "localhost";
$dbname = "blijdorp";
$username = "root";
$password = "";

$con = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$query = "SELECT * FROM dieren";
	$stm = $con->prepare($query);
	if($stm->execute())
	{
		$Data = $stm->fetchALL(PDO::FETCH_OBJ);
		foreach($Data as $row)
		{
			echo $row->soort;
			echo "yo";
		}
	}
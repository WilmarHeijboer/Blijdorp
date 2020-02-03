<!DOCTYPE html>
<html>
	<head>
		<title>Vuurwerkwinkel</title>
		
	</head>
	<body>
		<from method="POST">
			Artikel	:<input type="text" name="txtArtikel" />
			Product	:<input type="text" name="txtProduct" />
			Aantal	:<input type="text" name="txtAantal" />
			Prijs	:<input type="text" name="txtPrijs" />
			<input type="submit" name="btnOpslaan" value="Opslaan"/>
		</from>
		
		
		<?php
			
			include("datbase.php");
			
			if(isset($_POST['btnOpslaan']))
			{
				$artikel = $_POST['txtArtikel'];
				$product = $_POST['txtProduct'];
				$aantal = $_POST['txtPrijs'];
				$prijs = $_POST['txtPrijs'];
				
				$query = "INSERT INTO producten VALUES
						  ('$artikel', '$product', '$aantal', '$prijs')";
				//query inlezen om hem te zetten naar een statement.
				//die de database begrijpt.
				$stm = $conn->prepare($query);
				//statement uitvoeren op de databse.
				$stm->execute();
			}
		?>
		
		
	</body>
</html>
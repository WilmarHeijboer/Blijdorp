<!DOCTYPE html>
<html>
<body>
<div style="background-image: url('tiger1.jpg');">
</body>
<head>
    <title>De dieren</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css%22/%3E"/>
    <link rel="stylesheet" href="BlijdorpStyle3.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css%22/%3E"/>
	
</head>
<body>
<div class="topnav">
  <a href="Blijdorp.php">Home</a>
  <a class="active" href="navbardieren.php">Dieren</a>
  <a href="navbarverblijven.php">Verblijfplaatsen</a>
  <a href="navbarplattegrond.php">Plattegrond</a>
  <a href="navbarverblijfzoeken.php">Verblijf zoeken</a>
  <a href="navbartoevoegen.php">Dier toevoegen</a>
  <a href="navbardiersoort.php">Overzicht</a>
  <a href="navbarcontact.php">Contact</a>
  <div class="search-container">
    <form method="Post">
      <input type="text" placeholder="Type hier wat u zoekt" name="search";>
      <button type="submit" name="btnToon"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

	<?php
	$host = "localhost";
	$dbname = "blijdorp";
	$username = "root";
	$password = "";

	$con = new PDO("mysql:host=$host;dbname=$dbname","$username","$password");


	if(isset($_POST['btnToon'])) {
		$str = $_POST['search'];
		$sth = $con->prepare("SELECT * FROM dieren WHERE verblijfplaats = '$str'");

		$row = $sth->setFetchMode(PDO:: FETCH_OBJ);
		$sth->execute();
	?>


        <table>
            <tr>
                <th class="item">Dier:</th>
                
            </tr>
            <?php
            foreach($sth->fetchAll(PDO::FETCH_OBJ) as $row){
            ?>
            <tr>
                <td class="item"><?php echo $row->soort; ?></td>
                
            </tr>
<?php }} ?>
		</table>

</body>
</html>
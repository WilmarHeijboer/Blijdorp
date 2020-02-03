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
		$sth = $con->prepare("SELECT * FROM dieren WHERE soort = '$str'");

		$row = $sth->setFetchMode(PDO:: FETCH_OBJ);
		$sth->execute();
	?>


        <table>
            <tr>
                <th class="item">Dier:</th>
                <th class="item">Verblijfplaats:</th>
            </tr>
            <?php
            foreach($sth->fetchAll(PDO::FETCH_OBJ) as $row){
            ?>
            <tr>
                <td class="item"><?php echo $row->soort; ?></td>
                <td class="item"><?php echo $row->verblijfplaats; ?></td>
            </tr>
<?php }} ?>
		</table>
        

<div class="gallery">
  <a target="_blank" href="SumTijger.jpg">
    <img src="SumTijger.jpg" alt="Sumatraanse Tijger" width="600" height="400">
  </a>
  <div class="desc">Sumatraanse Tijger</div>
</div>

<div class="gallery">
  <a target="_blank" href="Haai1.jpg">
    <img src="Haai1.jpg" alt="Walvishaai" width="600" height="400">
  </a>
  <div class="desc">Walvishaai</div>
</div>

<div class="gallery">
  <a target="_blank" href="Hyena1.jpg">
    <img src="Hyena1.jpg" alt="Gevlekte Hyena" width="600" height="400">
  </a>
  <div class="desc">Gevlekte Hyena</div>
</div>

<div class="gallery">
  <a target="_blank" href="Gier1.jpg">
    <img src="Gier1.jpg" alt="Vale Gier" width="600" height="400">
  </a>
  <div class="desc">Vale Gier</div>
</div>

<div class="gallery">
  <a target="_blank" href="Leeuw1.jpg">
    <img src="Leeuw1.jpg" alt="Leeuw" width="600" height="400">
  </a>
  <div class="desc">Leeuw</div>
</div>

<div class="gallery">
  <a target="_blank" href="Ijsbeer1.jpg">
    <img src="Ijsbeer1.jpg" alt="Ijsbeer" width="600" height="400">
  </a>
  <div class="desc">Ijsbeer</div>
</div>

<div class="gallery">
  <a target="_blank" href="Poolvos1.jpg">
    <img src="Poolvos1.jpg" alt="Poolvos" width="600" height="400">
  </a>
  <div class="desc">Poolvos</div>
</div>

<div class="gallery">
  <a target="_blank" href="ZwarteNeushoor1.jpg">
    <img src="ZwarteNeushoorn1.jpg" alt="Zwarte Neushoorn" width="600" height="400">
  </a>
  <div class="desc">Zwarte Neushoorn</div>
</div>

<div class="gallery">
  <a target="_blank" href="ArmoerPanter1.jpg">
    <img src="ArmoerPanter1.jpg" alt="Armoer Panter" width="600" height="400">
  </a>
  <div class="desc">Armoer Panter</div>
</div>

<div class="gallery">
  <a target="_blank" href="Giraffe1.jpg">
    <img src="Giraffe1.jpg" alt="Giraffe" width="600" height="400">
  </a>
  <div class="desc">Giraffe</div>
</div>

<div class="gallery">
  <a target="_blank" href="RingStaartMaki1.jpg">
    <img src="RingStaartMaki1.jpg" alt="Ringstaartmaki" width="600" height="400">
  </a>
  <div class="desc">Ringstaartmaki</div>
</div>

<div class="gallery">
  <a target="_blank" href="Otter1.jpg">
    <img src="Otter1.jpg" alt="Otter" width="600" height="400">
  </a>
  <div class="desc">Otter</div>
</div>

<div class="gallery">
  <a target="_blank" href="KaaiMan1.jpg">
    <img src="KaaiMan1.jpg" alt="Kaaiman" width="600" height="400">
  </a>
  <div class="desc">Kaaiman</div>
</div>

<div class="gallery">
  <a target="_blank" href="Gelada1.jpg">
    <img src="Gelada1.jpg" alt="Gelada" width="600" height="400">
  </a>
  <div class="desc">Gelada</div>
</div>

<div class="gallery">
  <a target="_blank" href="Okapi1.jpg">
    <img src="Okapi1.jpg" alt="Okapi" width="600" height="400">
  </a>
  <div class="desc">Okapi</div>
</div>

<div class="gallery">
  <a target="_blank" href="KoningPinguin1.jpg">
    <img src="KoningPinguin1.jpg" alt="Koningpinguïn" width="600" height="400">
  </a>
  <div class="desc">Koningpinguïn</div>
</div>

</body>
</html>
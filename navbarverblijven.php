<!DOCTYPE html>
<html>
<body>
<div style="background-image: url('tiger1.jpg');">
</body>
<head>
    <title>Verblijfplaats</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css%22/%3E"/>
    <link rel="stylesheet" href="BlijdorpStyle3.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css%22/%3E"/>

</head>
<body>
<div class="topnav">
  <a href="Blijdorp.php">Home</a>
  <a href="navbardieren.php">Dieren</a>
  <a class="active" href="navbarverblijven.php">Verblijfplaatsen</a>
  <a href="navbarplattegrond.php">Plattegrond</a>
  <a href="navbarverblijfzoeken.php">Verblijf zoeken</a>
  <a href="navbartoevoegen.php">Dier toevoegen</a>
  <a href="navbardiersoort.php">Overzicht</a>
  <a href="navbarcontact.php">Contact</a>
  <div class="search-container">
    <form action="/action_page.php">
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
		$sth = $con->prepare("SELECT * FROM verblijfplaatsen WHERE verblijfnummer = '$str'");

		$row = $sth->setFetchMode(PDO:: FETCH_OBJ);
		$sth->execute();
	?>


        <table>
            <tr>
                <th class="item">Regio:</th>
                <th class="item">Dier:</th>
            </tr>
            <?php
            foreach($sth->fetchAll(PDO::FETCH_OBJ) as $row){
            ?>
            <tr>
                <td class="item"><?php echo $row->regio; ?></td>
				<td class="item"><?php echo $row->dier; ?></td>
            </tr>
<?php }} ?>
		</table>
		
<div class="gallery">
  <a target="_blank" href="SumTijger2.jpg">
    <img src="SumTijger2.jpg" alt="Sumatraanse Tijger" width="600" height="400">
  </a>
  <div class="desc">Dier: Sumatraanse Tijger</div>
  <div class="desc">Regio: Afrika</div>
  <div class="desc">Verblijfplaats: 12</div>
</div>

<div class="gallery">
  <a target="_blank" href="walvishaai2.jpg">
    <img src="walvishaai2.jpg" alt="Walvishaai" width="600" height="400">
  </a>
  <div class="desc">Dier: Walvishaai</div>
  <div class="desc">Regio: Oceanium</div>
  <div class="desc">Verblijfplaats: 37 </div>
</div>

<div class="gallery">
  <a target="_blank" href="Hyena2.jpg">
    <img src="Hyena2.jpg" alt="Gevlekte Hyena" width="600" height="400">
  </a>
  <div class="desc">Dier: Gevlekte Hyena</div>
  <div class="desc">Regio: Afrika</div>
  <div class="desc">Verblijfplaats: 14</div>
</div>

<div class="gallery">
  <a target="_blank" href="Gier2.jpg">
    <img src="Gier2.jpg" alt="Vale Gier" width="600" height="400">
  </a>
  <div class="desc">Dier: Vale Gier</div>
  <div class="desc">Regio: Afrika</div>
  <div class="desc">Verblijfplaats: 17</div>
</div>

<div class="gallery">
  <a target="_blank" href="Leeuw2.jpg">
    <img src="Leeuw2.jpg" alt="Leeuw" width="600" height="400">
  </a>
  <div class="desc">Dier: Leeuw</div>
  <div class="desc">Regio: Afrika</div>
  <div class="desc">Verblijfplaats: 16</div>
</div>

<div class="gallery">
  <a target="_blank" href="ijsbeer2.jpg">
    <img src="ijsbeer2.jpg" alt="Ijsbeer" width="600" height="400">
  </a>
  <div class="desc">Dier: Ijsbeer</div>
  <div class="desc">Regio: Alaska</div>
  <div class="desc">Verblijfplaats: 59</div>
</div>

<div class="gallery">
  <a target="_blank" href="poolvos2.jpg">
    <img src="poolvos2.jpg" alt="Poolvos" width="600" height="400">
  </a>
  <div class="desc">Dier: Poolvos</div>
  <div class="desc">Regio: Noord Amerika </div>
  <div class="desc">Verblijfplaats: 79</div>
</div>

<div class="gallery">
  <a target="_blank" href="neushoor2.jpg">
    <img src="neushoorn2.jpg" alt="Zwarte Neushoorn" width="600" height="400">
  </a>
  <div class="desc">Dier: Zwarte Neushoorn</div>
  <div class="desc">Regio: Afrika</div>
  <div class="desc">Verblijfplaats: 20</div>
</div>

<div class="gallery">
  <a target="_blank" href="ArmoerPanter2.jpg">
    <img src="ArmoerPanter2.jpg" alt="Armoer Panter" width="600" height="400">
  </a>
  <div class="desc">Dier: Armoer Panter</div>
  <div class="desc">Regio: Korea</div>
  <div class="desc">Verblijfplaats: 87</div>
</div>

<div class="gallery">
  <a target="_blank" href="giraffe2.jpg">
    <img src="giraffe2.jpg" alt="Giraffe" width="600" height="400">
  </a>
  <div class="desc">Dier: Giraffe</div>
   <div class="desc">Regio: Afrika</div>
  <div class="desc">Verblijfplaats: 22</div>
</div>

<div class="gallery">
  <a target="_blank" href="RingStaartMaki2.jpg">
    <img src="RingStaartMaki2.jpg" alt="Ringstaartmaki" width="600" height="400">
  </a>
  <div class="desc">Dier: Ringstaartmaki</div>
  <div class="desc">Regio: Afrika</div>
  <div class="desc">Verblijfplaats: 24</div>
</div>

<div class="gallery">
  <a target="_blank" href="Otter2.jpg">
    <img src="Otter2.jpg" alt="Otter" width="600" height="400">
  </a>
  <div class="desc">Dier: Otter</div>
  <div class="desc">Regio: Europa</div>
  <div class="desc">Verblijfplaats: 102</div>
</div>

<div class="gallery">
  <a target="_blank" href="KaaiMan2.jpg">
    <img src="KaaiMan2.jpg" alt="Kaaiman" width="600" height="400">
  </a>
  <div class="desc">Dier: Kaaiman</div>
  <div class="desc">Regio: Oceanium</div>
  <div class="desc">Verblijfplaats: 42</div>
</div>

<div class="gallery">
  <a target="_blank" href="Gelada2.jpg">
    <img src="Gelada2.jpg" alt="Gelada" width="600" height="400">
  </a>
  <div class="desc">Dier: Gelada</div>
  <div class="desc">Regio: Oerwoud</div>
  <div class="desc">Verblijfplaats: 187</div>
</div>

<div class="gallery">
  <a target="_blank" href="Okapi2.jpg">
    <img src="Okapi2.jpg" alt="Okapi" width="600" height="400">
  </a>
  <div class="desc">Dier: Okapi</div>
  <div class="desc">Regio: Oerwoud</div>
  <div class="desc">Verblijfplaats: 189</div>
</div>

<div class="gallery">
  <a target="_blank" href="Koningpinguin2.jpg">
    <img src="Koningpinguin2.jpg" alt="Koningpinguïn" width="600" height="400">
  </a>
  <div class="desc">Dier: Koningpinguïn</div>
  <div class="desc">Regio: Alaska</div>
  <div class="desc">Verblijfplaats: 61</div>

</div>

</div>
</body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8>
    <meta name=description value="VDL FUTURA ECO DRIVER">
    <meta name=keywords value="vdl">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="../images/favicon_.ico">
    <title>VDL FUTURA ECO DRIVER ADMIN</title>

    <link rel="stylesheet" href="../fonts/lato-reg/stylesheet.css">
    <link rel="stylesheet" href="../fonts/lato-lig2/lato-lig.css">
    <link rel="stylesheet" href="../fonts/lato-bol/lato-bol.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
    <link href="../stylesheets/jquery-ui-1.10.4.custom.css" rel="stylesheet">
    <link rel="stylesheet" href="../stylesheets/idangerous.swiper.css">
    <link rel="stylesheet" href="../stylesheets/usable.css">
    <link rel="stylesheet" href="../stylesheets/menu.css">
    <link rel="stylesheet" href="../stylesheets/screen.css">
    <link rel="stylesheet" href="../stylesheets/responsiveslides.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="../javascripts/jquery-ui-1.10.4.custom.min.js"></script>
    <script type="text/javascript" src="../javascripts/jquery.dropdownPlain.js"></script>
    <script type="text/javascript" src="../javascripts/html5shiv.js"></script>
    <script type="text/javascript" src="../javascripts/responsiveslides.min.js"></script>
  </head>
  <body>

    <div class="wrapper-main">

    <div class="clear"></div>

<?php
//save to database strip slashes
$servername = "localhost";
$username = "root";
$password = "monitor";
$dbname = "vdl";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM form";
$result = $conn->query($sql);

?>
    <div class="wrapper-full">
	<br/><br/><br/>
	<h3>Przesłane formularze: </h3>
	<table>
	<tr><th>Imię</th><th>Nazwisko</th><th>Nazwa firmy</th><th>Telefon</th><th>Email</th><th>Wynik</th><th>Dystans</th><th>Nr. rejestracyjny</th><th>Data</th><th>Ilość</th><th>Trasa</th><th>Rozmiar</th><th>Zdjęcie</th></tr>
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	echo "<tr><td>" . $row["imie"]. "</td><td>" . $row["nazwisko"]. "</td><td>" . $row["nazwafirmy"]. "</td><td>" . $row["telefon"]. "</td><td>" . $row["email"]. "</td><td>" . $row["wynik"]. "</td><td>" . $row["dystans"]. "</td><td>" . $row["nrrej"]. "</td><td>" . $row["data"]. "</td><td>" . $row["ilosc"]. "</td><td>" . $row["trasa"]. "</td><td>" . $row["rozmiar"]. "</td><td><a href=\"../uploaded/".$row["plik"]."\"><img src=\"../uploaded/" . $row["plik"]. "\" height=\"200px\"></img></a></td></tr>";
    }
}
  $conn->close();
?>
	</table>
	<br/>
	<a href="csv.php"><button class="btn btn-success">Pobierz CSV</button></a>
	<br/><br/>

    </div>

    <div class="clear"></div>

    <div class="clear"></div>


    <!-- wrapper-main close -->
    </div>

  </body>
</html>

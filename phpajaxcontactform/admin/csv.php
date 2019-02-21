<?php
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="vdl-futura-konkurs-1edycja.csv"');
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
  <?php
  $data = array();

$r0 = 	'Imię,Nazwisko,Nazwa firmy,Telefon,Email,Wynik,Dystans,Nr. rejestracyjny,Data,Ilość,Trasa,Rozmiar,Zdjęcie';
array_push($data,$r0);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	$r = $row["imie"]. "," . $row["nazwisko"]. "," . $row["nazwafirmy"]. "," . $row["telefon"]. "," . $row["email"]. "," . $row["wynik"]. "," . $row["dystans"].
  "," . $row["nrrej"]. "," . $row["data"]. "," . $row["ilosc"]. "," . $row["trasa"]. "," . $row["rozmiar"]. ",http://vdl-eco-driver.pl/uploaded/".$row["plik"]."\r\n";
  array_push($data,$r);
    }
}
  $conn->close();

  $fp = fopen('php://output', 'wb');
  foreach ( $data as $line ) {
      $val = explode(",", $line);
      fputcsv($fp, $val);
  }
  fclose($fp);
?>

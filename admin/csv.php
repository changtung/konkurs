<?php
header( "Content-type: application/vnd.ms-excel; charset=UTF-16LE" );
header('Content-Disposition: attachment; filename="vdl-futura-konkurs.csv"');
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
  $data = '';//array();

$r0 = "Id;Data zgloszenia;Imie;Nazwisko;Nazwa firmy;Miasto;Ulica;Nr Domu;Kod Pocztowy;Telefon;Email;Wynik;Dystans;Nr. rejestracyjny;Nr. VIN;Data;Ilosc;Trasa;Typ Autobusu;Rozmiar;Zdjecie\r\n";
//array_push($data,$r0);
$data .= $r0;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	$r = $row["id"]. ";" . $row["dateposted"]. ";". $row["imie"]. ";" . $row["nazwisko"]. ";" . $row["nazwafirmy"]. ";". $row["miasto"]. ";".$row["ulica"].
  ";".$row["nrdomu"] . ";" . $row["kodpocztowy"]. ";" . $row["telefon"].
  ";" . $row["email"]. ";" . $row["wynik"]. ";" . $row["dystans"].
  ";" . $row["nrrej"]. ";" .$row["nrvin"]. ";" . $row["data"]. ";" . $row["ilosc"]. ";" . $row["trasa"]. ";" .$row["typautobusu"]. ";" . $row["rozmiar"]. ";https://vdl-eco-driver.pl/uploaded/".$row["plik"]."\r\n";
  //array_push($data,$r);
  $data .= $r;
    }
}
  $conn->close();

  //$fp = fopen('php://output', 'wb');
  //foreach ( $data as $line ) {
      //$val = explode(",", $line);
    //  fputcsv($fp, $data);
  //}
  //fclose($fp);
  //echo pack("CCC",0xef,0xbb,0xbf);
  echo $data;
  //echo $data;
?>

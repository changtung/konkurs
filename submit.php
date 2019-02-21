<?php
/**
 * Created by PhpStorm.
 * User: panayiotisgeorgiou
 * Date: 16/12/16
 */

session_start();
if($_POST)
{
    require_once 'configuration.php';
    //check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        $output = json_encode(array( //create JSON data
            'type'=>'error',
            'text' => 'Sorry Request must be Ajax POST'
        ));
        die($output); //exit script outputting json data
    }

    //Sanitize input data using PHP filter_var().
    $imie		= filter_var($_POST["imie"], FILTER_SANITIZE_STRING);
    $nazwisko		= filter_var($_POST["nazwisko"], FILTER_SANITIZE_STRING);
    $nazwafirmy		= filter_var($_POST["nazwafirmy"], FILTER_SANITIZE_STRING);
    $miasto		= filter_var($_POST["miasto"], FILTER_SANITIZE_STRING);
    $ulica		= filter_var($_POST["ulica"], FILTER_SANITIZE_STRING);
    $nrdomu		= filter_var($_POST["nrdomu"], FILTER_SANITIZE_STRING);
    $kodpocztowy		= filter_var($_POST["kodpocztowy"], FILTER_SANITIZE_STRING);
    $telefon		= filter_var($_POST["telefon"], FILTER_SANITIZE_NUMBER_INT);
    $email		= filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $wynik 	= filter_var($_POST["wynik"], FILTER_SANITIZE_NUMBER_INT);
    $dystans 	= filter_var($_POST["dystans"], FILTER_SANITIZE_STRING);
    $nrrej 	= filter_var($_POST["nrrej"], FILTER_SANITIZE_STRING);
    $nrvin 	= filter_var($_POST["nrvin"], FILTER_SANITIZE_STRING);
    $data 	= filter_var($_POST["data"], FILTER_SANITIZE_STRING);
    $ilosc 	= filter_var($_POST["ilosc"], FILTER_SANITIZE_STRING);
    $trasa 	= filter_var($_POST["trasa"], FILTER_SANITIZE_STRING);
    $typautobusu 	= filter_var($_POST["typautobusu"], FILTER_SANITIZE_STRING);
    $rozmiar		= filter_var($_POST["rozmiar"], FILTER_SANITIZE_STRING);
    $plik		= filter_var($_POST["plik"], FILTER_SANITIZE_STRING);
    $captcha_answer	= filter_var($_POST["captcha_answer"], FILTER_SANITIZE_STRING);

    //additional php validation
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //email validation
        $output = json_encode(array('type'=>'error', 'text' => 'Proszę wpisać prawidłowy e-mail.'));
        die($output);
    }
    if(!filter_var($telefon, FILTER_SANITIZE_NUMBER_FLOAT)){ //check for valid numbers in phone number field
        $output = json_encode(array('type'=>'error', 'text' => 'Proszę wpisać tylko cyfry w numerze telefonu.'));
        die($output);
    }

    if((int)$captcha_answer != $_SESSION['expect_answer']){ //check captcha
        $output = json_encode(array('type'=>'error', 'text' => 'Wynik działania jest niepoprawny.'));
        die($output);
    }

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
$sql = "INSERT INTO form (dateposted,imie,nazwisko,nazwafirmy,miasto,ulica,nrdomu,kodpocztowy,telefon,email,wynik,dystans,nrrej,nrvin,data,ilosc,typautobusu,trasa,rozmiar,plik) VALUES (now(), '".stripslashes($imie)."',  '".stripslashes($nazwisko)."','".stripslashes($nazwafirmy)."','".stripslashes($miasto)."','".stripslashes($ulica)."','".stripslashes($nrdomu)."','".stripslashes($kodpocztowy)."','".stripslashes($telefon)."','".stripslashes($email).
"','".stripslashes($wynik)."','".stripslashes($dystans)."', '".stripslashes($nrrej)."', '".stripslashes($nrvin)."','".stripslashes($data).
"','".stripslashes($ilosc)."','".stripslashes($typautobusu)."','".stripslashes($trasa)."','".stripslashes($rozmiar)."','".stripslashes($plik)."')";

if ($conn->query($sql) === TRUE) {
  $output = json_encode(array('type'=>'message', 'text' => 'Cześć '.$imie .' Dziękujemy za Twój udział!'));
  $conn->close();
  die($output);
} else {
    $baza = "Błąd: " . $sql . "<br>" . $conn->error;
    $output = json_encode(array('type'=>'error', 'text' => 'Nie można zapisać danych: '.$baza));
    $conn->close();
    die($output);
}





    $message_body = "Imię: $imie<br />Email: $email: ".nl2br($trasa);
    $subject = "Potwierdzenie wypełnienia formularza:";
    if(_IS_SMTP === TRUE){
        $send_mail = send_smtp_email(_TO_EMAIL, $subject, $message_body);
    }else{
        $send_mail = send_normal_email(_TO_EMAIL, $subject, $message_body, $cc="", $bcc="");
    }

    if(!$send_mail)
    {
        //If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
        $output = json_encode(array('type'=>'error', 'text' => 'Nie można wysłać e-maila.'));
        die($output);
    }else{
        $output = json_encode(array('type'=>'message', 'text' => 'Cześć '.$imie .' Dziękujemy za Twój udział!'));
        die($output);
    }
}

function send_smtp_email($toEmail,$subject, $message_body, $cc="", $bcc=""){
    require_once('phpmailer/class.phpmailer.php');// path to the PHPMailer class
    require_once('phpmailer/class.smtp.php');
    $mail = new PHPMailer();
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();  // telling the class to use SMTP
    $mail->Mailer = "smtp";
    $mail->Host = _SMTP_HOST;
    $mail->Port = _SMTP_PORT;
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Username = _SMTP_USERNAME; // SMTP username
    $mail->Password = _SMTP_PASSWORD; // SMTP password

    $mail->setFrom($toEmail, _FROM_EMAIL_NAME);
    $mail->AddAddress($toEmail); // name is optional
    //$mail->AddAddress('to_email_1@domain.com'); // for multiple recipient
    if($cc)
        $mail->addCC($cc);

    if($bcc)
        $mail->addBCC($bcc);

    $mail->Subject  =  $subject;
    $mail->IsHTML(true);
    $mail->Body	= $message_body;
    if ($mail->send()) {
        return true;
    } else {
        return false;
    }
}

function send_normal_email($toEmail,$subject, $message_body, $cc="", $bcc=""){
    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

    // Additional headers
    $headers .= 'From: '._FROM_EMAIL_NAME.' <'.$toEmail.'>' . "\r\n";
    if($cc)
        $headers .= 'Cc: '.$cc . "\r\n";

    if($bcc)
        $headers .= 'Bcc: '.$bcc . "\r\n";

    $sendmail = mail($toEmail, $subject, $message_body, $headers);
    return $sendmail;
}
?>

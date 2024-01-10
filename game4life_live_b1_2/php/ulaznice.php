<?php
$servername = "ucka.veleri.hr";
$username = "fmatanovi";
$password = "11";
$dbname = "fmatanovi";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Neuspješno povezivanje na bazu. Greška : " . $conn->connect_error);
}


$ime = $_POST['ticket-form-name'];
$email = $_POST['ticket-form-email'];
$tel = $_POST['ticket-form-phone'];
$broj = $_POST['ticket-form-number'];
$plus = $_POST['ticket-form-message'];

$var = $_POST['TicketForm'];
switch ($var) {
    case 'flexRadioDefault1':
        $tip = 40;
        break;
    case 'flexRadioDefault2':
        $tip = 80;
        break;
    default:
        $tip = 0;
        break;
}



$sql = "INSERT INTO g_ulaznice (ime, email, tel, tip, broj, plus) VALUES ('$ime', '$email', '$tel', '$tip', '$broj', '$plus')";

if ($conn->query($sql) === TRUE) {
    echo "Uspješno slanje!";
} else {
    echo "Neuspješno slanje. Greška :" . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
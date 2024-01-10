<?php
$servername = "ucka.veleri.hr";
$username = "fmatanovi";
$password = "11";
$dbname = "fmatanovi";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Neuspješno povezivanje na bazu. Greška : " . $conn->connect_error);
}


$ime = $_POST['contact-name'];
$email = $_POST['contact-email'];
$poruka = $_POST['contact-message'];


$sql = "INSERT INTO g_kontakt (ime, email, poruka) VALUES ('$ime', '$email', '$poruka')";

if ($conn->query($sql) === TRUE) {
    echo "Uspješno slanje!";
} else {
    echo "Neuspješno slanje. Greška :" . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
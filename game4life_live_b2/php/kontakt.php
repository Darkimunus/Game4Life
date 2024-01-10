<?php

    $server = "student.veleri.hr";
    $database = "npavecic";
    $username = "npavecic";
    $password ="1995";

    $conn = mysqli_connect($server, $username, $password, $database) or 
        die("Konekcija nije uspješna");
    
    $imePrezime = mysqli_real_escape_string($conn, $_POST["contact-name"]);
    $mail = mysqli_real_escape_string($conn, $_POST["contact-email"]);
    $poruka = mysqli_real_escape_string($conn, $_POST["contact-message"]);
    
    $query = "INSERT INTO Kontakt_web (Ime_prezime, email_adresa, poruka) VALUES ('$imePrezime', '$mail', '$poruka')";
    $res = mysqli_query($conn, $query);
    if ($res) {
        echo "Poruka je dodana!";
    } else {
        echo $query;
    }
    mysqli_close($conn);

?>
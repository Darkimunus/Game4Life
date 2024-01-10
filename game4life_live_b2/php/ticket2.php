<?php

    $server = "ucka.veleri.hr";
    $database = "fmatanovi";
    $username = "fmatanovi";
    $password ="11";

    $conn = mysqli_connect($server, $username, $password, $database) or 
        die("Konekcija nije uspješna");
    
    $ime = mysqli_real_escape_string($conn, $_POST["name_client"]);
    $email = mysqli_real_escape_string($conn, $_POST["email_client"]);
    $kontakt = mysqli_real_escape_string($conn, $_POST["phone_client"]);
    
    $query = "INSERT INTO Kupci_WEB (ime, email, kontakt) VALUES ('$ime', '$email', '$kontakt');";
    $res = mysqli_query($conn, $query);

    if ($res) {
        echo "Kupnja je dodana!";
    } else {
        echo $query;
    }
     
    mysqli_close($conn);

?>
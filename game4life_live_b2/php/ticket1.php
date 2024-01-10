<?php

    $server = "ucka.veleri.hr";
    $database = "fmatanovi";
    $username = "fmatanovi";
    $password ="11";

    $conn = mysqli_connect($server, $username, $password, $database) or 
        die("Konekcija nije uspješna");
    
    
    $tip = mysqli_real_escape_string($conn, $_POST["radio_client"]);
    $broj = $_POST["ticket_number_client"];
    $zahtjev = mysqli_real_escape_string($conn, $_POST["ticket_message_client"]);

    $query = "INSERT INTO Ulaznice_WEB (tip, broj, zahtjev) VALUES ('$tip', '$broj', '$zahtjev');";
    $res = mysqli_query($conn, $query);

    if ($res) {
        echo "Kupnja je dodana!";
    } else {
        echo $query;
    }
     
    mysqli_close($conn);

?>
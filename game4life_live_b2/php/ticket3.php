<?php

    $server = "ucka.veleri.hr";
    $database = "fmatanovi";
    $username = "fmatanovi";
    $password ="11";

    $conn = mysqli_connect($server, $username, $password, $database) or 
        die("Konekcija nije uspješna");
    

    $id_k_upit = mysqli_query($conn,"SELECT id_k FROM Kupci_WEB ORDER BY id_k DESC LIMIT 1;");
    $id_u_upit = mysqli_query($conn,"SELECT id_u FROM Ulaznice_WEB ORDER BY id_u DESC LIMIT 1;");
    $id_k_red = mysqli_fetch_assoc($id_k_upit);
    $id_u_red = mysqli_fetch_assoc($id_u_upit);
    $id_k=$id_k_red['id_k'];
    $id_u=$id_u_red['id_u'];

    $query = "INSERT INTO Ulaznice_po_kupcu_WEB (id_k, id_u) VALUES ($id_k, $id_u);";
    $res = mysqli_query($conn, $query);
    if ($res) {
        echo "Kupnja je dodana!";
    } else {
        echo $query;
    }
     
    mysqli_close($conn);

?>
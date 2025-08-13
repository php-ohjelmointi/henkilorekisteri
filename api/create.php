<?php 
    include 'db.php';

    $data = json_decode(file_get_contents("php://input"), true);
    $etunimi = $data['etunimi'];
    $sukunimi = $data['sukunimi'];
    $sposti = $data['sposti'];

    $sql_Lause_Lisaa = "INSERT INTO henkilot (etunimi, sukunimi, sposti) VALUES ('$etunimi','$sukunimi','$sposti')";
        if(mysqli_query($conn, $sql_Lause_Lisaa)){
            echo json_encode(["viesti" => "uusi henkilo lisätty"]);
        }else {
            echo json_encode(["virhe" => mysqli_error($conn)]);
        }
?>


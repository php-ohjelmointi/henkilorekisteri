<?php 
    include 'db.php';

    $data = json_decode(file_get_contents("php://input"), true);
    $id = $data['id'];
    $etunimi = $data['etunimi'];
    $sukunimi = $data['sukunimi'];
    $sposti = $data['sposti'];

    $sql_Lause_Muokkaa = "UPDATE henkilot SET etunimi ='$etunimi', sukunimi='$sukunimi',sposti='$sposti' WHERE id='$id'";
        if(mysqli_query($conn, $sql_Lause_Muokkaa)){
            echo json_encode(["viesti" => "Henkilo Muokattu"]);
        }else {
            echo json_encode(["virhe" => mysqli_error($conn)]);
        }
?>

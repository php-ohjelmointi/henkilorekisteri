<?php 
    include 'db.php';

    $data = json_decode(file_get_contents("php://input"), true);
    $etunimi = $data['etunimi'];
    $sukunimi = $data['sukunimi'];
    $sposti = $data['sposti'];
    $puhelin = $data['puhelin'];
    $osoite = $data['osoite'];
    $postinumero = $data['postinumero'];
    $kansallisuus = $data['kansallisuus'];


    $sql_Lause_Lisaa = "INSERT INTO henkilot (etunimi,sukunimi,sposti,puhelin,osoite,postinumero,kansallisuus) VALUES ('$etunimi','$sukunimi','$sposti','$puhelin','$osoite','$postinumero','$kansallisuus')";
        if(mysqli_query($conn, $sql_Lause_Lisaa)){
            echo json_encode(["viesti" => "uusi henkilo lisatty"]);
        }else {
            echo json_encode(["virhe" => mysqli_error($conn)]);
        }
?>


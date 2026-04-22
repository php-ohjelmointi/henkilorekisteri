<?php 
    include 'db.php';

    $data = json_decode(file_get_contents("php://input"), true);
    $id = isset($data['id']) ? intval($data['id']) : 0;
    $SSN = isset($data['SSN']) ? $data['SSN'] : null;
    $etunimi = isset($data['etunimi']) ? $data['etunimi'] : null;
    $sukunimi = isset($data['sukunimi']) ? $data['sukunimi'] : null;
    $sposti = isset($data['sposti']) ? $data['sposti'] : null;
    $puhelin = isset($data['puhelin']) ? $data['puhelin'] : null;
    $osoite = isset($data['osoite']) ? $data['osoite'] : null;
    $postinumero = isset($data['postinumero']) ? $data['postinumero'] : null;
    $kansallisuus = isset($data['kansallisuus']) ? $data['kansallisuus'] : null;

    $stmt = mysqli_prepare($conn, "UPDATE henkilot SET SSN = ?, etunimi = ?, sukunimi = ?, sposti = ?, puhelin = ?, osoite = ?, postinumero = ?, kansallisuus = ? WHERE id = ?");
    if (!$stmt) {
        echo json_encode(["virhe" => mysqli_error($conn)]);
        exit;
    }
    mysqli_stmt_bind_param($stmt, 'ssssssssi', $SSN, $etunimi, $sukunimi, $sposti, $puhelin, $osoite, $postinumero, $kansallisuus, $id);
    if(mysqli_stmt_execute($stmt)){
        echo json_encode(["viesti" => "Henkilo Muokattu"]);
    } else {
        echo json_encode(["virhe" => mysqli_stmt_error($stmt)]);
    }
?>

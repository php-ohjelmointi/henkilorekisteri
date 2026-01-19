<?php
include 'db.php';

$raw = file_get_contents('php://input');
$data = null;
if ($raw !== false && strlen($raw) > 0) {
    $data = json_decode($raw, true);
}
if (!is_array($data)) {
    $data = $_POST;
}

$etunimi = isset($data['etunimi']) ? $data['etunimi'] : '';
$sukunimi = isset($data['sukunimi']) ? $data['sukunimi'] : '';
$sposti = isset($data['sposti']) ? $data['sposti'] : '';
$puhelin = isset($data['puhelin']) ? $data['puhelin'] : '';
$osoite = isset($data['osoite']) ? $data['osoite'] : '';
$postinumero = isset($data['postinumero']) ? $data['postinumero'] : null;
$kansallisuus = isset($data['kansallisuus']) ? $data['kansallisuus'] : '';

// Determine whether `id` is AUTO_INCREMENT
$res = mysqli_query($conn, "SHOW COLUMNS FROM henkilot LIKE 'id'");
$needsId = true;
if ($res) {
    $col = mysqli_fetch_assoc($res);
    if ($col && isset($col['Extra']) && stripos($col['Extra'], 'auto_increment') !== false) {
        $needsId = false;
    }
}

// If the table lacks AUTO_INCREMENT, compute next id
$nextId = null;
if ($needsId) {
    $r = mysqli_query($conn, 'SELECT MAX(id) AS maxid FROM henkilot');
    if ($r) {
        $row = mysqli_fetch_assoc($r);
        $max = isset($row['maxid']) ? (int)$row['maxid'] : 0;
        $nextId = $max + 1;
    } else {
        echo json_encode(["virhe" => mysqli_error($conn)]);
        exit;
    }
}

if ($needsId) {
    $stmt = mysqli_prepare($conn, "INSERT INTO henkilot (id,etunimi,sukunimi,sposti,puhelin,osoite,postinumero,kansallisuus) VALUES (?,?,?,?,?,?,?,?)");
    mysqli_stmt_bind_param($stmt, 'isssssss', $nextId, $etunimi, $sukunimi, $sposti, $puhelin, $osoite, $postinumero, $kansallisuus);
} else {
    $stmt = mysqli_prepare($conn, "INSERT INTO henkilot (etunimi,sukunimi,sposti,puhelin,osoite,postinumero,kansallisuus) VALUES (?,?,?,?,?,?,?)");
    mysqli_stmt_bind_param($stmt, 'sssssss', $etunimi, $sukunimi, $sposti, $puhelin, $osoite, $postinumero, $kansallisuus);
}

if (!$stmt) {
    echo json_encode(["virhe" => mysqli_error($conn)]);
    exit;
}

if (mysqli_stmt_execute($stmt)) {
    echo json_encode(["viesti" => "uusi henkilo lisatty"]);
} else {
    echo json_encode(["virhe" => mysqli_stmt_error($stmt)]);
}

?>


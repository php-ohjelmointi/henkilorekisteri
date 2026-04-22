<?php
include 'db.php';

$sql = "SELECT DISTINCT TRIM(kansallisuus) as kansallisuus FROM henkilot WHERE kansallisuus IS NOT NULL AND kansallisuus != ''";
$res = mysqli_query($conn, $sql);
$vals = [];
if ($res) {
    while ($row = mysqli_fetch_assoc($res)) {
        if ($row['kansallisuus'] !== null && $row['kansallisuus'] !== '') {
            $vals[] = $row['kansallisuus'];
        }
    }
}

header('Content-Type: application/json; charset=utf-8');
echo json_encode($vals);
?>
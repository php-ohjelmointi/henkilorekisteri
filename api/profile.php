<?php
require 'db.php';
header('Content-Type: application/json');

$id = 0;

// Tarkista GET-parametri
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
}
// Tarkista myös POST-body (jos käytetään POST-metodia)
else {
    $data = json_decode(file_get_contents('php://input'));
    if (isset($data->id)) {
        $id = intval($data->id);
    }
}

if ($id > 0) {
    $sql = "SELECT * FROM henkilot WHERE id = $id";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        echo json_encode($result->fetch_assoc());
    } else {
        echo json_encode([]); 
    }
} else {
    echo json_encode([]);
}

$conn->close();
?>
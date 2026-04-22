<?php 
    include 'db.php';

    $sql_Lause_Hae = "SELECT * FROM henkilot";
    if (isset($_GET['q']) && strlen(trim($_GET['q'])) > 0) {
        $q = mysqli_real_escape_string($conn, $_GET['q']);
        $sql_Lause_Hae = "SELECT * FROM henkilot WHERE etunimi LIKE '%$q%' OR sukunimi LIKE '%$q%'";
    }
    $Tulos = mysqli_query($conn, $sql_Lause_Hae);

    $henkilot = [];
    while ($row = mysqli_fetch_assoc($Tulos)){
        $henkilot [] = $row; 
    }
    echo json_encode($henkilot);
?>
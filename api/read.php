<?php 
    include 'db.php';


    $sql_Lause_Hae = "SELECT * FROM henkilot";
    $Tulos = mysqli_query($conn, $sql_Lause_Hae);

    $henkilot = [];
    while ($row = mysqli_fetch_assoc($Tulos)){
        $henkilot [] = $row; 
    }
    echo json_encode($henkilot);
?>
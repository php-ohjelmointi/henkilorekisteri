<?php 
    include 'db.php';

    $data = json_decode(file_get_contents("php://input"), true);
    $id = $data['id'];

    $sql_Lause_Poista = "DELETE FROM henkilot WHERE id='$id'";
        if(mysqli_query($conn, $sql_Lause_Poista)){
            echo json_encode(["viesti" => "Henkilo ".$id." Poistettu"]);
        }else {
            echo json_encode(["virhe" => mysqli_error($conn)]);
        }
?>

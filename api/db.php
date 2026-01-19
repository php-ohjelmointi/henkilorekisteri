<?php

    $host = 'localhost';  
    $user = 'root';  
    $pass = 'lrAZB]8DVEK3Bh0I'; 
    $db = "henkilorekisteri"; 
    
    $conn = mysqli_connect($host, $user, $pass,$db);  
    if(!$conn)  
    {  
    die('Could not connect: ' . mysqli_error());  
    }   
    
?>
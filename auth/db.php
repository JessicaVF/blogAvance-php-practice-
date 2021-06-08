<?php 

$monHote = "localhost";
$database = "blogavance";
$databaseUser = "blogAvance";
$userPassword = "20410953";

    $maConnection = mysqli_connect($monHote, $databaseUser, $userPassword, $database);
    
    if(!$maConnection){
        echo "Pas de connection à la DB";
        die();
    }
    



?>
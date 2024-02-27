<?php
    $locatie = "mysql";
    $databasenaam = "logindb";
    $gebruikersnaam = "root";
    $wachtwoord = "qwerty";

    try{
        $db_handler = new PDO("mysql:host=$locatie;dbname=$databasenaam;charset=UTF8", $gebruikersnaam, $wachtwoord);
    } catch(Exception $ex){
        print($ex);
    }
?>
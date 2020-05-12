<?php

try{
    $bdd = new PDO('mysql:host=localhost;dbname=no_stress', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(PDOException $e){
    die('Erreur: '.$e->getMessage());
}

date_default_timezone_set('Europe/Paris');

?>
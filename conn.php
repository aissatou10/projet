<?php
try{
    $db = new PDO('mysql:host=localhost;
    dbname=gestion', 'root', '');
    echo 'Connexion reussie';
}catch(PDOException $e){
    die('Erreur : '.$e->getMessage());

    
}


<?php
function connectToDatabase() {
    try {
        $database = new PDO('mysql:host=localhost;dbname=pastamia;charset=utf8', 'root', '');
        return $database;
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}

// Utilisation de la fonction pour se connecter à la base de données
$database = connectToDatabase();
?>

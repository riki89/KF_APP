<?php
$serveur = 'localhost';
$dbname = 'kf';
$user = 'root';
<<<<<<< HEAD
$mdp = '';
=======
$mdp = 'root';
>>>>>>> 16f08de99769accff44e35e35e02048d5104690f

try {
    $base = new PDO('mysql:host='.$serveur.';dbname='.$dbname,$user,$mdp,
        [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]);
} catch (PDOException $e) {
    echo "Erreur lors de la connexion à la BD ".$e->getMessage();
}
?>
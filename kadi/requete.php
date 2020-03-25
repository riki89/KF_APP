<?php
include_once 'pdo.php';

function ajout($nom, $date, $lieu, $objet)
{
    global $db;
    $req = "INSERT INTO activite VALUES (null,  '$nom', '$date', '$lieu', '$objet', 0)";
    $db->exec($req);

}

function afficherListe()
{
    global $db;
    $req = "SELECT * FROM activite  ";
    return $db->query($req)->fetchAll();
}

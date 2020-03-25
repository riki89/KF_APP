<?php
include_once 'pdo.php';
global $db;

function ajout($nom, $date, $lieu, $objet)
{
    $req = "INSERT INTO activite VALUES (null,  '$nom', '$date', '$lieu', '$objet', 0)";
    $db->exec($req);

}

function afficherListe()
{
    $req = "SELECT * FROM activite  ";
    return $db->query($req)->fetchAll();
}

function getActivite($id)
{
    $req = "SELECT * FROM activite WHERE idactivite = $id";
    return $db->query($req)->fetch();
}

<?php
include_once 'pdo.php';

function ajout($nom, $lieu, $objet, $date)
{
    global $bd;
    $req = "INSERT INTO activite values (null,  '$nom', null , '$lieu', 0)";
    $bd->exec($req);

}

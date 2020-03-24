<?php
include_once 'pdo.php';

    if (isset($_post["ajouter"])) {
    	extract($_post);
    	$res = function ajout($nom, $date, $lieu, $objet)
    if ($res==1){
    	header("requete.php");
     } 
    }

function ajout($nom, $date, $lieu, $objet)
{
    global $db;
    $req = "INSERT INTO activite VALUES (null,  '$nom', '$date', '$lieu', '$objet', 0)";
    $db->exec($req);

}

function affichage()
{
    global $db;
    $req = "SELECT * FROM activite  ";
    return $db->query($req)->fetchAll();
}

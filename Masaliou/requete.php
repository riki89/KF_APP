<?php
include_once 'pdo2.php';

    /*if (isset($_post["ajouter"])) {
    	extract($_post);
    	$res = function compte_rendu($nom, $date, $lieu, $objet)
    if ($res==1){
    	header("requete.php");
     } 
    } */
function addCompteRendu( $odj, $point1, $point2, $point3, $point4, $point5, $divers )
{
    global $db;
    $req="INSERT INTO compte_rendu values(null, '$odj', '$point1', '$point2', '$point3', '$point4', '$point5', '$divers')";
    //echo "<br> $req";
    return $db->exec($req);
}

function affichage()
{
    global $db;
    $req = "SELECT * FROM compte_rendu";
    return $db->query($req)->fetchAll();
}
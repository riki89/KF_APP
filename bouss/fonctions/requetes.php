<?php
require_once 'bdd.php';


function  getPersonne()
{
    global $base;
    $req = "SELECT * FROM  personne WHERE idP = idP ORDER BY idP";
    return $base->query($req)->fetchAll();

}
function addPersonne( $nomP , $prenomP, $telephoneP, $mailP, $adresseP, $fonctionP ,$loginP, $mdpP)
{
    global $base;
    $req = "INSERT INTO personne VALUES (null, '$nomP' , '$prenomP', '$telephoneP', '$mailP','$adresseP', '$fonctionP', '$loginP' , '$mdpP' )";
    $base -> exec($req);
}
function checkConexion($login, $mdp)
{
    global $base;
    $req = "SELECT * FROM personne WHERE loginP = :login AND mdpP = :mdp";
    $stmt =  $base->prepare($req);
    $data = [
        'login' => $login,
        'mdp'=> $mdp
    ];
    $stmt->execute($data);

    return $stmt->fetch(PDO::FETCH_ASSOC);


}
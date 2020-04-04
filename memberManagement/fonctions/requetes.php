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

function delete($id)
{
      global $base;
      return $base-> exec("DELETE FROM personne WHERE idP= $id");


}

function modifier($idP, $nomP , $prenomP, $telephoneP, $mailP, $adresseP, $fonctionP ,$loginP, $mdpP)
{
     global $base;
     $req = "UPDATE personne SET nomP = '$nomP' , prenomP = '$prenomP', telephoneP ='$telephoneP', mailP='$mailP', adresseP = '$adresseP', fonctionP = '$fonctionP', loginP='$loginP' ,mdpP='$mdpP'
       WHERE idP = '$idP'
     ";
     $base -> exec($req);
   
}

/*
function modifier($personne)
{
     global $base;
     $req = "UPDATE personne SET nomP = '$personne["nomP"]' , personne[prenomP] = '$prenomP', telephoneP ='$telephoneP', mailP='$mailP', adresseP = '$adresseP', fonctionP = '$fonctionP', loginP='$loginP' ,mdpP='$mdpP'";
     $base -> exec($req);
   
}
*/

function Find($id)
{
     global $base;
     $req = "SELECT * FROM personne WHERE idP =$id";
     return $base->query($req)->fetch();
}

/*function  getPerso($idP)
{
    global $base;
    $req = "SELECT * FROM  personne WHERE idP = $idP";
    return $base->query($req)->fetch();

}*/
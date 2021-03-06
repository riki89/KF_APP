<?php
require_once 'bdd.php';

    function  getPersonne()
    {
        global $base;
        $req = "SELECT * FROM  personne WHERE idP = idP ORDER BY prenomP";
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

    function deleteMember($id)
    {
        global $base;
        return $base-> exec("DELETE FROM personne WHERE idP= $id");


    }

    function modifierMember($idP, $nomP , $prenomP, $telephoneP, $mailP, $adresseP, $fonctionP ,$loginP, $mdpP)
    {
        global $base;
        $req = "UPDATE personne SET nomP = '$nomP' , prenomP = '$prenomP', telephoneP ='$telephoneP', mailP='$mailP', adresseP = '$adresseP', fonctionP = '$fonctionP', loginP='$loginP' ,mdpP='$mdpP'
        WHERE idP = '$idP'
        ";
        $base -> exec($req);
    
    }

    function Find($id)
    {
        global $base;
        $req = "SELECT * FROM personne WHERE idP =$id";
        return $base->query($req)->fetch();
    }

/*----------------------------
---GESTION DES ACTIVITES----
----------------------------
*/

    function ajout($nom, $date, $lieu, $objet)
    {
        global $base;
        $req = "INSERT INTO activite VALUES (null,  '$nom', '$date', '$lieu', '$objet', 0)";
        $base->exec($req);
    }

    function  getActi()
    {
        global $base;
        $req = "SELECT * FROM  activite WHERE idactivite = idactivite ORDER BY idactivite";
        return $base->query($req)->fetchAll();

    }

   
    
    function getActivite($id)
    {
        global $base;
        $req = "SELECT * FROM activite WHERE idactivite = $id";
        return $base->query($req)->fetchAll();
    }
    function afficherListe()
    {
        global $base;
        $req = "SELECT * FROM activite";
        return $base->query($req)->fetchAll();
    }

    function supprimer($id)
    {
        global $base;

        return $base->exec("DELETE FROM activite WHERE idactivite = $id");
    }

    function modifierActivity($id, $nom, $lieu, $objet ,$datea)
    {
        global $base;
        $req = "UPDATE activite SET nom = '$nom', datea = '$datea', lieu= '$lieu', objet = '$objet' WHERE idactivite = $id";
        return $base->exec($req);
    }

/*  -----------------------------------
    ----GESTION DES COMPTES RENDUS-----
    -----------------------------------
*/

    /*Requete pour recuperer un compte rendu*/
    function findCompteRendu($id)
    {
        global $base;
        $req = "SELECT * FROM compterendu WHERE id = $id";
        return $base->query($req)->fetch();
    }

    function addCompteRendu( $odj, $point1, $point2, $point3, $point4, $point5, $divers )
    {
        global $base;
        $req="INSERT INTO compte_rendu values(null, '$odj', '$point1', '$point2', '$point3', '$point4', '$point5', '$divers')";
        //$req="INSERT INTO compterendu values(null, '$activity', '$ordreJour', '$contenu',)";
        //echo "<br> $req";
        return $base->exec($req);
    }

    function addCompteRendu_new($activity, $ordreJour, $contenu )
    {
        global $base;
        $req="INSERT INTO compteRendu values(null, $activity, '$ordreJour', '$contenu')";
        //echo "<br> $req";
        return $base->exec($req);
    }

    /*
    function addCompteRendu($activity, $ordreJour, $contenu )
    {
        global $base;
        $req="INSERT INTO compteRendu values(null, '$activity', '$ordreJour', '$contenu')";
        //echo "<br> $req";
        return $base->exec($req);
    }
    */

    function affichage()
    {
        global $base;
        $req = "SELECT * FROM compte_rendu";
        //$req = "SELECT * FROM compterendu";
        return $base->query($req)->fetchAll();
    }
    function cptRenduList()
    {
        global $base;
        //$req = "SELECT * FROM compteRendu";
        $req = "SELECT * FROM compteRendu";
        return $base->query($req)->fetchAll();
    }

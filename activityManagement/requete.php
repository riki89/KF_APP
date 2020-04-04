<?php
    include_once 'pdo.php';

    function ajout($nom, $date, $lieu, $objet)
    {
        global $db;
        $req = "INSERT INTO activite VALUES (null,  '$nom', '$date', '$lieu', '$objet', 0)";
        $db->exec($req);
    }
    
    function getActivite($id)
    {
        global $db;
        $req = "SELECT * FROM activite WHERE idactivite = $id";
        return $db->query($req)->fetch();
    }
    function afficherListe()
    {
        global $db;
        $req = "SELECT * FROM activite  ";
        return $db->query($req)->fetchAll();
    }

    function supprimer($id)
    {
        global $db;

        return $db->exec("DELETE FROM activite WHERE idactivite = $id");
    }

    function modifier($id, $nom, $lieu, $objet ,$datea)
    {
        global $db;
        $req = "UPDATE activite SET nom = '$nom', datea = '$datea', lieu= '$lieu', objet = '$objet' WHERE idactivite = $id";
        return $db->exec($req);
    }

?>
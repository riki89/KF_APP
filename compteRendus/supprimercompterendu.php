<?php
require_once '../public/fonctions/requetes.php';
require_once '../compteRendus/compteRendu.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (supprimercompteRendu($id) == 1) {

        header("location:compteRendu.php?p=gProfil");
    }

}

if (isset($_POST['btnmod'])) {
    extract($_POST);

    if (modifiercompterendu($id, $activity , $ordreJour, $contenu) == 1) {
        header("location:compteRendu.php?p=gProfil");
    }
}
?>
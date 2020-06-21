<?php
require_once '../public/fonctions/requetes.php';

if (isset($_GET['idPSup'])) {
    $id = $_GET['idPSup'];
    if (deleteMember($id) == 1) {

        header("location:membre.php?p=gProfil");
    }

}

if (isset($_POST['btnmod'])) {
    extract($_POST);

    if (modifierMember($nomP, $prenomP, $telephoneP, $mailP, $adresseP, $fonctionP, $loginP, $mdpP) == 1) {
        header("location:membre.php?p=gProfil");

    }
}
?>
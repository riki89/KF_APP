<?php
require_once '../fonctions/requetes.php';
if (isset($_GET['idPSup'])) {
    $id = $_GET['idPSup'];
    if (delete($id) == 1) {

        header("location:/kf/membre.php?p=gProfil");
    }

}

if (isset($_POST['btnmod'])) {
    extract($_POST);

    if (modifier($nomP, $prenomP, $telephoneP, $mailP, $adresseP, $fonctionP, $loginP, $mdpP) == 1) {
        header("location:/kf/membre.php?p=gProfil");

    }
}


?>
<?php
include_once 'navbar.php';
include_once 'header.php';
require_once 'fonctions/requetes.php';

if (isset($_GET['idP'])) {
    $id = $_GET['idP'];
    $p = Find($id);
}


/*if (isset($_POST['modifier']))
{
    extract($_POST);
    $modif = modifier($id , $nom , $prenom, $telephone, $mail, $adresse, $fonction ,$login, $mdp);
    if ($modif == 1)
    {
        header("location:accueil.php");
    }
    else echo "Erreur lors de la modification";
}
*/
if (isset($_POST['btnmod'])) {
    extract($_POST);
    if (isset($id)) {
        $modif = modifier($id, $nom, $prenom, $tel, $mail, $adresse, $fonction, $login, $mdp);
        //if ($modif == 1)
        //{
        header("location:membre.php");
        //}
        //else echo "Erreur lors de la modification";

    } else
        if (addPersonne($nom, $prenom, $tel, $mail, $adresse, $fonction, $login, $mdp) != 1) {
            header("location:/kf/accueil.php");

        } else echo "erreur";
}

?>

<div class="card mt-4 container col-md-8">

    <h5 class="card-header aqua-gradient info-color white-text text-center py-4">
        <strong>EDITION MEMBRE</strong>
    </h5>

    <div class="card-body">
        <form method="post" action="">
            <div class="row mt-4">
                <div class="col-md-3">
                    <label>NOM</label>
                </div>
                <div class="col-md-5">
                    <input type="text" name="nom" value="<?= $p['nomP'] ?> " class="form-control">
                </div>


            </div>
            <div class="row mt-4">
                <div class="col-md-3">
                    <label>PRENOM</label>
                </div>
                <div class="col-md-5">
                    <input type="text" name="prenom" value="<?= $p['prenomP'] ?> " class="form-control">
                </div>


            </div>
            <div class="row mt-4">
                <div class="col-md-3">
                    <label>TEL</label>
                </div>
                <div class="col-md-5">
                    <input type="text" name="tel" value="<?= $p['telephoneP'] ?> " class="form-control">
                </div>

            </div>
            <div class="row mt-4">
                <div class="col-md-3">
                    <label>MAIL</label>
                </div>
                <div class="col-md-5">
                    <input type="text" name="mail" value="<?= $p['mailP'] ?> " class="form-control">
                </div>

            </div>

            <div class="row mt-4">
                <div class="col-md-3">
                    <label>ADRESSE</label>
                </div>
                <div class="col-md-5">
                    <input type="text" name="adresse" value="<?= $p['adresseP'] ?> " class="form-control">
                </div>

            </div>

            <div class="row mt-4">
                <div class="col-md-3">
                    <label>FONCTION</label>
                </div>
                <div class="col-md-5">
                    <input type="text" name="fonction" value="<?= $p['fonctionP'] ?> " class="form-control">
                </div>

            </div>

            <div class="row mt-4">
                <div class="col-md-3">
                    <label>NOM D'UTILI</label>
                </div>
                <div class="col-md-5">
                    <input type="text" name="login" value="<?= $p['loginP'] ?> " class="form-control">
                </div>


            </div>
            <div class="row mt-4">
                <div class="col-md-3">
                    <label>MOT DE PASSE</label>
                </div>
                <div class="col-md-5">
                    <input type="text" name="mdp" value="<?= $p['mdpP'] ?> " class="form-control">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-3 offset-4">
                    <input type="submit" name="btnmod" class="btn btn-sm btn-primary" value="modifier"/>
                </div>
            </div>
        </form>
    </div>


    <!-- Material form login -->


<?php
include_once 'footer.php';
?>
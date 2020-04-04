
<?php
 include_once 'navbar.php';
include_once 'header.php';
require_once 'fonctions/requetes.php';




if(isset($_POST['enreg'])) {
    extract($_POST);
    if(!empty($nom) && !empty($prenom) && !empty($tel) && !empty($mail) && !empty($adresse) && !empty($fonction) && !empty($login) && !empty($mdp))
    {

       if (addPersonne($nom, $prenom, $tel, $mail, $adresse, $fonction, $login, $mdp) != 1) {
        header("location:/kf/membre.php");

    } else echo "erreur"; 
    }
    
}

?>

    <div class="card mt-4 container col-md-8">

        <h5 class="card-header aqua-gradient info-color white-text text-center py-4">
            <strong>AJOUT MEMBRE</strong>
        </h5>

    <div class="card-body">
        <form method="post" action="">
            <div class="row mt-4">
                <div class="col-md-3">
                    <label>NOM</label>
                </div>
                <div class="col-md-5">
                    <input type="text" name="nom" class="form-control">
                </div>


            </div>
            <div class="row mt-4" >
                <div class="col-md-3">
                    <label>PRENOM</label>
                </div>
                <div class="col-md-5">
                    <input type="text" name="prenom" class="form-control">
                </div>


            </div>
            <div class="row mt-4">
                <div class="col-md-3">
                    <label>TEL</label>
                </div>
                <div class="col-md-5">
                    <input type="text" name="tel" class="form-control">
                </div>

            </div>
            <div class="row mt-4">
                <div class="col-md-3">
                    <label>MAIL</label>
                </div>
                <div class="col-md-5">
                    <input type="mail" name="mail" class="form-control">
                </div>

            </div>

            <div class="row mt-4">
                <div class="col-md-3">
                    <label>ADRESSE</label>
                </div>
                <div class="col-md-5">
                    <input type="text" name="adresse" class="form-control">
                </div>

            </div>

            <div class="row mt-4">
                <div class="col-md-3">
                    <label>FONCTION</label>
                </div>
                <div class="col-md-5">
                    <input type="text" name="fonction" class="form-control">
                </div>

            </div>

            <div class="row mt-4">
                <div class="col-md-3">
                    <label>NOM D'UTILI</label>
                </div>
                <div class="col-md-5">
                    <input type="text" name="login" class="form-control">
                </div>


            </div>
            <div class="row mt-4">
                <div class="col-md-3">
                    <label>MOT DE PASSE</label>
                </div>
                <div class="col-md-5">
                    <input type="text" name="mdp" class="form-control">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-3 offset-4">
                    <input type = "submit" name="enreg" class="btn btn-sm btn-primary" value="Enregistrer"/>
                </div>
            </div>
        </form>
    </div>



<!-- Material form login -->


<?php
include_once'footer.php';
?>
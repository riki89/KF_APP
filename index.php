<?php
session_start();
include_once 'public/header.php';

require_once 'public/fonctions/requetes.php';

if(isset($_POST['btnConnecter'])) {
    extract($_POST);
    if(checkConexion($login , $mdp) != FALSE)
    {
        header("location:folders/home.php");

    }else
    {
         echo "Verifier votre login ou mdp $login/$mdp";
    }


}


?>

<div class="container mt-4">
    <div class="col-md-8 offset-4">
        <span class="text-uppercase h1 green lighten-2 blue-text col-md-4 ">UTILISATEUR</span>
    </div>
</div>

<!-- Material form login -->
<div class="card mt-4 container col-md-4">

    <h5 class="card-header aqua-gradient white-text text-center py-4">
        <strong>AUTHENTIFICATION</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form method="post" class="text-center" style="color: #757575;" action="#!">

            <!-- Email -->
            <div class="md-form">
                <input type="text" name="login" required id="materialLoginFormEmail" class="form-control">
                <label for="materialLoginFormEmail">Nom d'Utilisateur</label>
            </div>

            <!-- Password -->
            <div class="md-form">
                <input type="password" name="mdp"  required id="materialLoginFormPassword" class="form-control">
                <label for="materialLoginFormPassword">Mot de Passe</label>
            </div>


            <!-- Sign in button -->
            <button class="btn blue-gradient btn-rounded my-4 waves-effect z-depth-0" type="submit" name="btnConnecter">Se Connecter</button>

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form login -->
<?php
if (isset($_GET['erreur'])){
    echo '<div class="h2 text-center red-text container col-md-6">Login ou Mot de Passe incorrect !</div>';
}
?>
<?php
include_once 'members/footer.php';
?>

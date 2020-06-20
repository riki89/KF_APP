<?php
    include_once '../compteRendus/modifiercompterendu.php';
    include_once '../folders/navbar.php';
    include_once '../public/fonctions/requetes.php';
    //include_once '../folders/accueil.php';
    include_once '../public/header.php';
    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        // $p = Find($id);
        $compteRendu = findCompteRendu($id);
     
    }


    if (isset($_POST['btnmod'])) {
        extract($_POST);
        if (isset($id)) {
            $modif = modifiercompterendu($id, $activity , $ordreJour, $contenu);
            
            //if ($modif == 1)
            //{
            header("location:compteRendu.php?ok=1");
            //}
            //else echo "Erreur lors de la modification";
        } else
            if    ( addCompteRendu_new($activity, $ordreJour, $contenu ) != 1) {
                header("location:/kf/accueil.php");
            } else echo "erreur";
    }

?>

<!-- Formulaire -->
<div class="card mt-4 container col-md-8">

        <h5 class="card-header aqua-gradient info-color white-text text-center py-4">
            <strong>Modifier COMPTE RENDU</strong>
        </h5>

        <!--Card content-->
        <div class="card-body">

            <!-- Form -->
            <form class="text-center" id = "form" style="color: #757575;" action="#!" method="post">

                <!-- Name -->
                <!--fieldset-->
                
                
                <div class="row mt-3" >
                    <div class="col-md-3 text-center ">
                        <label for="act" class="h5">Activite</label>
                    </div>
                    <div class="col-md-2">
                        <select default="Selectionner" name="activity">
                            <option value="" selected>
                                Choir une activite 
                            </option>
                                <?php
                                $activities = getActi();

                                foreach ($activities as $act)
                                {?>
                                    <option value = "<?= $act['idactivite']?>" <?php if ($compteRendu['activity'] == $act['idactivite']) echo "selected" ?> >
                                        <?= $act['nom']?>
                                    </option>
                                <?php } ?>
                        </select> 
                    </div>
                </div>
                    


                    <div class="row mt-4" >
                        <div class="col-md-3">
                            <label>Ordre du jour</label>
                        </div>
                        <div class="col-md-5">
                            <input type="textArea" name="ordreJour" class="form-control" placeholder="Saisir l'ordre du jour" value="<?php echo $compteRendu['ordreJour'] ?>">
                        </div>
                    </div>

                    <div class="row mt-4" id = "contenu">
                        <div class="col-md-3">
                            <!--label>Point </label-->
                        </div>
                        <div class="col-md-5">
                            <textarea name="contenu" class="form-control"> <?php echo $compteRendu['contenu'] ?> </textarea>
                        </div>
                    </div>

                    <div id = "addDiv">
                    </div>

                    <div class="row mt-4" id = "lastDiv" >
                        <div class="col-md-3">
                            <label>Ajouter un autre point</label>
                        </div>
                        <div class="col-md-5">
                            <input type = "button" value = "Ajouter un autre point" class="form-control" onClick="cloneDiv()">
                        </div>
                    </div>
                <!--/fieldset -->
                <!-- Sign in button -->
                <button id = "myButton" class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name= "btnmod">valider</button>

            </form>
            <!-- Form -->

        </div>

    </div>

<!--
<div class="card mt-4 container col-md-8">

    <h5 class="card-header aqua-gradient info-color white-text text-center py-4">
        <strong>EDITION COMPTE RENDU</strong>
    </h5>

    <div class="card-body">
        <form method="post" action="">
            <div class="row mt-4">
                <div class="col-md-3">
                    <label>ACTIVITY</label>
                </div>
                <div class="col-md-5">
                    <input type="text" name="activity" value="<?= $p['activity'] ?> " class="form-control">
                </div>


            </div>
            <div class="row mt-4">
                <div class="col-md-3">
                    <label>ORDRE DU JOUR</label>
                </div>
                <div class="col-md-5">
                    <input type="text" name="ordreJour" value="<?= $p['ordreJour'] ?> " class="form-control">
                </div>


            </div>
            <div class="row mt-4">
                <div class="col-md-3">
                    <label>CONTENU</label>
                </div>
                <div class="col-md-5">
                    <input type="text" name="contenu" value="<?= $p['contenu'] ?> " class="form-control">
                </div> -->

            <div class="row mt-4">
                <div class="col-md-3 offset-4">
                    
                </div>
            </div>
        </form>
    </div> 


    <!-- Material form login -->


<?php
//include_once 'footer.php';
?>
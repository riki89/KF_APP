
<?php

    include_once '../public/fonctions/requetes.php';
    include_once '../folders/navbar.php';
    include_once '../public/header.php';
    include_once 'navbar.php';
    include_once 'functions.php';

    if (isset($_POST['ajouter']))
    {
        /*if (empty($_POST['membre'] && $_POST['dateC'] && $_POST['montant']))
        {
            echo 'VEILLEZ REMPLIR TOUS LES CHAMPS';
        }
        else
        */
        if (isset($_GET['idcMod']))
        {
            $id = $_GET['idcMod'];
            $cotiz = findCotizByID($id);
            extract($_POST);
            editCotiz($id, $dateC, $membre, $montant ,$desc, $dateC);
            echo "Modification realisee avec succes ";
        } else
        {
            extract($_POST);
            
            if ($montant % 1000 == 0)
            {
                $toInsVal = 0;
                while ($toInsVal != $montant)
                {
                    $dateSaisi = $dateC; 
                    $dateC = findLastCotiz($membre)['max_date'];
                    if ( is_null($dateC))
                    {
                        //on cherche le premier mois de l'anne en cours
                        $dateC = getNextMonth();
                        //echo "<br> Date Null: ".$dateC;
                    } else 
                    {
                        //on cherche le prochain mois qu'il doit cotiser
                        $dateC = getNextMonthV2($dateC);
                        //echo "<br> Date Not Null: ".$dateC['next_month'];
                    }
                    addCotisation( $dateC['next_month'], $membre, 1000, $desc, $dateSaisi) ;
                    $toInsVal += 1000;
                }
                echo "Insertion realisee avec succes ";
            }
            //echo "<br> Date Histo: ".$dateSaisi;
            
        }
    }
    if (isset($_GET['idcMod']))
    {
        $id = $_GET['idcMod'];
        $cotiz = findCotizByID($id);
        //print_r ($act);
    }else
        $cotiz= null

    if(isset($_GET['idcSup']))
    {
        $id = $_GET['idcSup'];
        if (supprimerCotisation($id) == 1)
        {
            header("location:cotisation.php");
        }
    }

    ?>

    <div class="container mt-5">

        <div class="col-md-10 offset-1">
            <div class="card">
                <div class="card-header blue lighten-4 text-center text-uppercase h4 font-weight-bold" >
                    Nouvelle cotisation
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row mt-4">
                            <div class="col-md-2 text-center">
                                <label for="membre" class="h5">MEMBRE</label>
                            </div>
                            <div class="col-md-4">
                                <select default="Selectionner" name="membre" required>
                                    <option value="">
                                     Choisir un membre
                                    </option>
                                        <?php
                                        foreach ($membres as $membre)
                                        {?>
                                            <option value = "<?= $membre['idP']?>" >
                                                <?= $membre['prenomP']?>
                                            </option>
                                        <?php } ?>
                                </select> 
                            </div>
                            <div class="col-md-2 text-center">
                                <label for="tel" class="h5">MONTANT</label>
                            </div>
                            <div class="col-md-4">
                                <input id="mnt" type="number" min = "1000" class="form-control" name="montant" value="<?= $cotiz['montant'] ?>"  placeholder="montant" required>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-md-2 text-center">
                                    <label for="date">DATE</label>
                                </div>
                                    <input type="date" class="form-control" name="dateC"  value="<?= $cotiz['dateC'] ?>" id="inputCity" required>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-md-2 text-center">
                                    <label for="inputCity">DESCRIPTION</label>
                                </div>
                                    <input type="TEXTAREA" id="desc" class="form-control" name="desc"  value="<?= $cotiz['description'] ?>" id="desc" required>
                            </div>
                        </div>
                        <button type="submit" name="ajouter" class="btn btn-primary">ENREGISTRER</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <h5 class="card-header aqua-gradient info-color white-text text-center py-1 ">
        <strong>LISTE DES COTISATIONS</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-2 pt-0">
        <table class="table table-info" >
            <tr>
                <th class="h4">#</th>
                <th class="h4">Membre</th>
                <th class="h3">Date de cotisation</th>
                <th class="h3">Date cotisée</th>
                <th class="h4">Montant</th>
                <th class="h4">Description</th>
            </tr>
            <?php
            $cotiz = getCotisation();
            foreach ($cotiz as $p){
                ?>
                <tr>
                    <td> <?= $p['id'] ?> </td>
                    <td> <?= Find( $p['membre'])['prenomP'] ?></td>
                    <td> <?= $p['dateCotisation'] ?> </td>
                    <td> <?= $p['dateC'] ?> </td>
                    <td> <?= $p['montant'] ?> </td>
                    <td> <?= $p['description'] ?> </td>
                    <td> <a href="cotisation.php?idcSup=<?= $p['id']?>" class="btn btn-sm btn-danger">Supprimer</a></td></td>
                    <td colspan="2"><a href="cotisation.php?idcMod=<?= $p['id']?>" class="btn btn-sm btn-warning">Modifier</a>
                </tr>

            <?php  }

            ?>


        </table>

  
    </div>

    <?php
  //  include_once 'footer.php';
    ?>
<script type = "text/javascript" src = "js/cotisation.js"> </script>
<?php

    include_once '../public/fonctions/requetes.php';
    include_once '../folders/navbar.php';
    include_once '../folder/header.php';
    include_once 'navbar.php';

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
            editCotiz($id, $dateC, $membre, $montant ,$desc);
            echo "Modification realisee avec succes ";
        } else
        {
            extract($_POST);
           // echo "Member: ".$membre." date: ".$dateC." montant: ".$montant." desc: ".$desc;
            addCotisation( $dateC, $membre, $montant, $desc) ;
            echo "Insertion realisee avec succes ";
        }
    }
    if (isset($_GET['idcMod']))
    {
        $id = $_GET['idcMod'];
        $cotiz = findCotizByID($id);
        //print_r ($act);
    }

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
                <div class="card-header blue lighten-4 text-center text-uppercase h4 font-weight-bold">
                    Nouvelle cotisation
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row mt-4">
                            <div class="col-md-2 text-center">
                                <label for="membre" class="h5">MEMBRE</label>
                            </div>
                            <div class="col-md-4">
                                <select default="Selectionner" name="membre">
                                    <option value="" selected>
                                        Choir un membre 
                                    </option>
                                        <?php
                                        $membres = getPersonne();
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
                                <input type="text" class="form-control" name="montant" value="<?= $cotiz['montant'] ?>"  placeholder="montant">
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-md-2 text-center">
                                    <label for="inputCity">DATE</label>
                                </div>
                                    <input type="date" class="form-control" name="dateC"  value="<?= $cotiz['dateC'] ?>" id="inputCity">
                            </div>
                            <div class="form-group col-md-6">
                                <div class="col-md-2 text-center">
                                    <label for="inputCity">DESCRIPTION</label>
                                </div>
                                    <input type="TEXTAREA" class="form-control" name="desc"  value="<?= $cotiz['description'] ?>" id="desc">
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
                <th class="h3">Date</th>
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
    include_once 'footer.php';
    ?>
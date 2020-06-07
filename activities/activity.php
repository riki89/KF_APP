<?php

include_once '../public/fonctions/requetes.php';
include_once '../folders/navbar.php';
include_once '../public/header.php';


if (isset($_POST['ajouter']))
{
    if (empty($_POST['nom'] && $_POST['lieu'] && $_POST['objet'] && $_POST['datea']))
    {
        echo 'VEILLEZ REMPLIR TOUS LES CHAMPS';
    }
    elseif (isset($_GET['idactiviteMod']))
        {
            $id = $_GET['idactiviteMod'];
            $act = getActivite($id);
            extract($_POST);
            modifierActivity($id, $nom, $lieu, $objet ,$datea);
            echo "Modification realisee avec succes ";
        } else
            {
                extract($_POST);
                ajout($nom, $datea, $lieu, $objet ) ;
                echo "Insertion realisee avec succes ";
            }
}
if (isset($_GET['idactiviteMod']))
{
    $id = $_GET['idactiviteMod'];
    $act = getActivite($id);
    //print_r ($act);
}

if(isset($_GET['idactiviteSup']))
{
    echo 'deleting';
    $id = $_GET['idactiviteSup'];
    if (supprimer($id) == 1)
    {
        header("location:activity.php");
    }
}

?>
<link rel="stylesheet" href="../public/asset/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">





<div class="container mt-5">

    <div class="col-md-10 offset-1">
        <div class="card">
            <div class="card-header blue lighten-4 text-center text-uppercase h4 font-weight-bold">
                Nouvelle activite
            </div>
            <div class="card-body">
                <form action="" method="post">

                    <div class="row mt-4">
                        <div class="col-md-2 text-center">
                            <label for="nom" class="h5">NOM</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="nom" placeholder="nom-activite" value= "<?= $act['nom'] ?>" >
                        </div>
                        <div class="col-md-2 text-center">
                            <label for="prenom" class="h5">LIEU</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="lieu"  value= "<?= $act['lieu'] ?>"  placeholder="lieu-activite">
                        </div>

                    </div>

                    <div class="row mt-4">
                        <div class="col-md-2 text-center">
                            <label for="tel" class="h5">OBJET</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="objet" value="<?= $act['objet'] ?>"  placeholder="objet-activite">
                        </div>
                        <div class="form-group col-md-6">
                            <div class="col-md-2 text-center">
                                <label for="inputCity">DATE</label>
                            </div>
                                <input type="date" class="form-control" name="datea"  value="<?= $act['dateA'] ?>" id="inputCity">
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
    <strong>LISTE DES ACTIVITE</strong>
</h5>

<!--Card content-->
<div class="card-body px-lg-2 pt-0">
    <table class="table table-info" >
        <tr>
            <th class="h4">#</th>
            <th class="h4">NOM</th>
            <th class="h3">DATE</th>
            <th class="h4">LIEU</th>
            <th class="h4">OBJET</th>
            <th class="h4">#COMPTE RENDU</th>

        </tr>
        <?php
        $personnes = afficherListe();
        foreach ($personnes as $p){
            ?>
            <tr>
                <td> <?= $p['idactivite'] ?> </td>
                <td> <?= $p['nom'] ?></td>
                <td> <?= $p['dateA'] ?> </td>
                <td> <?= $p['lieu'] ?> </td>
                <td> <?= $p['objet'] ?> </td>
                <td> <?= $p['idactivite'] ?> </td>
                <td> <a href="activity.php?idactiviteSup=<?= $p['idactivite']?>" class="btn btn-sm btn-danger">Supprimer</a></td></td>
                <td colspan="2"><a href="activity.php?idactiviteMod=<?= $p['idactivite']?>" class="btn btn-sm btn-warning">Modifier</a>
            </tr>

        <?php  }

        ?>


    </table>
</div>

<?php

?>


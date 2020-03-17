<?php
include_once 'requete.php';


if (isset($_POST['ajouter']))
{
    extract($_POST);
    ajout($nom, $datea, $lieu, $objet ) ;
    echo "Insertion realisee avec succes ";
}

?>
<link rel="stylesheet" href="bootstrap-4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<form method="post" action="">
    <div class="form-row">
        <div class="form-group col-md-8">
            <label for="inputEmail4">NOM</label>
            <input type="text" class="form-control" id="inputEmail4" name="nom" placeholder="Nom activite">
        </div>

        <div class="form-group col-md-8"">
        <label for="inputAddress">LIEU</label>
        <input type="text" class="form-control" id="inputAddress" name="lieu" placeholder="Lieu activite">
    </div>
    <div class="form-group col-md-8"">
    <label for="inputAddress">OBJET</label>
    <input type="text" class="form-control" id="inputAddress"  name="objet" placeholder="Objet activite">
    </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">DATE</label>
            <input type="date" class="form-control" name="datea" id="inputCity">
        </div>

    </div>

    <button type="submit" name="ajouter" class="btn btn-primary">ENREGISTRER</button>
</form>


<h5 class="card-header aqua-gradient info-color white-text text-center py-1">
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
                <td> <?= $p['idCompteRendu'] ?> </td>
            </tr>

        <?php  }

        ?>


    </table>
</div>

</div>
<?php
  include_once 'requete.php';


 if (isset($_POST['ajouter']))
{
    extract($_POST);
    if (ajout($nom, $lieu, $objet, $date ) == 1)
    {
        echo 'Activite insere avec succes';
    }
    else
        echo "Erreur lors de l'insertion";
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
            <input type="date" class="form-control" name="date" id="inputCity">
        </div>

    </div>

    <button type="submit" name="ajouter" class="btn btn-primary">ENREGISTRER</button>
</form>
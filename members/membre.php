<?php

include_once '../folders/navbar.php';
include_once 'navbar.php';
include_once '../public/header.php';
require_once '../public/fonctions/requetes.php';
$personne = getPersonne();

?>
<!-- Material form login -->


<div class="card mt-4 container col-md-10">

    <h5 class="card-header aqua-gradient info-color white-text text-center py-4">
        <strong>LISTE DES MEMBRES</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">
        <table class="table table-info" color="red">
            <tr>

                <th class="h4">ID</th>
                <th class="h4">NOM</th>
                <th class="h4">PRENOM</th>
                <th class="h4">TELEPHONE</th>
                <th class="h4">MAIL</th>
                <th class="h4">ADRESSE</th>
                <th class="h4">FONCTIONS</th>
                <th class="h4">ACTIONS</th>

            </tr>
            <?php
            $personne = getPersonne();
            foreach ($personne as $p) {
                ?>
                <tr>
                    <td><?= $p['idP'] ?></td>
                    <td><?= $p['nomP'] ?></td>
                    <td><?= $p['prenomP'] ?></td>
                    <td><?= $p['telephoneP'] ?></td>
                    <td><?= $p['mailP'] ?></td>
                    <td><?= $p['adresseP'] ?></td>
                    <td> <?= $p['fonctionP'] ?></td>
                    <td colspan="2"><a href="modifier.php?modifier&idP=<?= $p['idP'] ?>"
                                       class="btn btn-sm btn-warning">Modifier</a>
                        <a href="profilCtrl.php?idPSup=<?= $p['idP'] ?>" class="btn btn-sm btn-danger">Supprimer</a>
                    </td>
                </tr>

            <?php }
            ?>
        </table>
    </div>

</div>


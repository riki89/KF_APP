<?php
       include_once 'navbar.php';
       include_once'header.php'; 
       require_once'fonctions/requetes.php';
       $personne = getPersonne();

      
?>
<div class="row mt-4" >
  <div class="col-md-4 offset-8">
    <a href="index.php" class="btn btn-sm btn-primary">DECONEXION</a>

  </div>
</div>

<!-- Material form login -->
<div class="card mt-4 container col-md-10
">

  <h5 class="card-header aqua-gradient info-color white-text text-center py-4">
    <strong>LISTE DES MEMBRES</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">
    <table class="table table-info" >
      <tr>

          <th class="h4">ID</th>
          <th class="h3">NOM</th>
          <th class="h4">PRENOM</th>
          <th class="h4">TELEPHONE</th>
          <th class="h4">MAIL</th>
          <th class="h4">ADRESSE</th>
          <th class="h3">FONCTIONS</th>

      </tr>
      <?php
      $personne =getPersonne();
      foreach ($personne as $p)
      {
         ?>
         <tr>
             <td><?= $p['idP']?></td>
             <td><?= $p['nomP']?></td>
             <td><?= $p['prenomP']?></td>
             <td><?= $p['telephoneP']?></td>
             <td><?= $p['mailP']?></td>
             <td><?= $p['adresseP']?></td>
             <td> <?= $p['fonctionP']?></td>
         </tr>

     <?php }
      ?>
    </table>
  </div>

</div>
<div class="row mt-4" >
    <div class="col-md-4 offset-8">
        <a href="ajoutProd.php" class="btn btn-sm btn-primary">ajouter</a>

    </div>
</div>

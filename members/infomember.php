<!-- Navbar -->
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
  /* Footer color for sake of consistency with Navbar */
#table{
        margin: 0 ,auto;
        float: left;
        background-color: #33F0FF;
        width: 1350px;
        height: 500px;
     }
  .img{
        float: left;
        width: 25%;
        height: 65%;
        margin-left: 5%;
        margin-top: 6%;
        background-color: ; 
      } 
 .first{
        font-style: arial;
        font-size: 14px;

        float: left;
        width: 45%;
        height: 75%;
        margin-left: 5%;
        margin-top: 6%;
        background-color:white; 
      }   
</style>
</head>
<body>


<?php
  include '../folders/navbar.php';
  include '../public/header.php';
  require_once '../public/fonctions/requetes.php';
  $personne = getPersonne();


?>
  
<div id="table">
  <div class="img">
    <img src="../public/images/bkm.JPG" width="300px" height="320px">
    </div>
  <div class="first">
     <?php
            $personne = getPersonne();
            foreach ($personne as $p) {
                ?>
                <h1 >Nom:   <?=$p['nomP'] ?></h1>
                <h1 >Preom: <?=$p['prenomP'] ?></h1>
                <h1 >Telephone: <?=$p['telephoneP'] ?></h1>
                <h1 >Fonction:  <?=$p['fonctionP'] ?></h1>
                <h1 >Adresse:   <?=$p['adresseP'] ?></h1>
    
    <?php }
            ?>
  </div>
</div>
</body>
</html>
     
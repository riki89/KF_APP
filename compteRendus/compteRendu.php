<?php
include_once '../public/fonctions/requetes.php';
include_once '../folders/navbar.php';
include_once '../public/header.php';
//include_once '../navbar.php';


if (isset($_POST['ajouter']))
{
   header('location:compteRendu.php');
    extract($_POST);
<<<<<<< HEAD
    addCompteRendu($odj, $point1, $point2, $point3, $point4, $point5, $divers ) ;
    //addCompteRendu($odj, $activity, $ordreJour, $contenu) ;
    
=======
    //addCompteRendu($odj, $point1, $point2, $point3, $point4, $point5, $divers ) ;
    //echo "odj: ".$odj; //.
    //echo "string";
    //echo " activite: ".$activite;
    //echo " contenu: ".$contenu;
    addCompteRendu_new($activity, $odj, $contenu) ;  
    //addCompteRendu_new(1, "ODJ", "Content") ; 
>>>>>>> 65d1f93e7f5b4301b88151a25d47ce0308f54659
}
   

?>

	<!-- Material form subscription -->
    <div class="card mt-4 container col-md-8">

        <h5 class="card-header aqua-gradient info-color white-text text-center py-4">
            <strong>AJOUT COMPTE RENDU</strong>
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
                                    <option value = "<?= $act['idactivite']?>" >
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
                            <input type="textArea" name="odj" class="form-control" placeholder="Saisir l'ordre du jour">
                        </div>
                    </div>

                    <div class="row mt-4" id = "contenu">
                        <div class="col-md-3">
                            <!--label>Point </label-->
                        </div>
                        <div class="col-md-5">
                            <textarea name="contenu" class="form-control"> Entrer du contenu... </textarea>
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
                <button id = "myButton" class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name= "ajouter">valider</button>

            </form>
            <!-- Form -->

        </div>

    </div>
    <!-- Material form subscription -->
        <h5 class="card-header aqua-gradient info-color white-text text-center py-1">
            <strong>Compte rendu</strong>
        </h5>

    <!--Card content-->
    <div class="card-body px-lg-2 pt-0">
        <table class="table table-info">
            <tr>
               <!--<th class="h4">#</th>--> 
                <th class="h3">ID</th>
                <th class="h4">Activity</th>
                <th class="h4">Ordre du jour</th>
                <th class="h4">Contenu</th>
                <th class="h4">Actions</th>
                <!--Card content <th class="h4">Point 4</th>
                <th class="h4">Divers</th> -->
            </tr>
            <?php
            $compteRendu = affichage();
            foreach ($compteRendu as $p){
                ?>
                <tr>
                    <td> <?= $p['id'] ?> </td>
                    <td> <?= $p['activity'] ?></td>
                    <td> <?= $p['ordreJour'] ?> </td>
                    <td> <?= $p['contenu'] ?> </td>
                   <!-- <td colspan="2"><a href="modifier.php?modifier&idP=<?= $p['idP'] ?>"-->
                                      <td colspan="2"><a href="#" class="btn btn-sm btn-warning">Modifier</a>
                    <!-- <a href="profilCtrl.php?idPSup=<?= $p['idP'] ?>"--> <a href="#" class="btn btn-sm btn-danger">Supprimer</a>
                    </td>
            
                    <!--<td> <?= $p[''] ?> </td>
                     <td> <?= $p['point4'] ?> </td>
                    <td> <?= $p['point5'] ?> </td>
                    <td> <?= $p['divers'] ?> </td> -->
                </tr>
            <?php  }
            ?>
       </table>
    </div>

    </div>
</body>
    <script type="text/javascript" >
            function cloneDiv()
            {
                var dv = document.getElementById("content");
                var parent = dv.parentNode;
                var btnDiv = document.getElementById("lastDiv");
                var toAdd = dv.cloneNode(true);
                parent.insertBefore(toAdd, btnDiv);
            }
            
    </script>
</html>


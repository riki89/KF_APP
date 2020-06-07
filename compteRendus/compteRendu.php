<?php
include_once '../public/fonctions/requetes.php';
include_once '../folders/navbar.php';
include_once '../public/header.php';



if (isset($_POST['ajouter']))
{
   header('location:compteRendu.php');
    extract($_POST);
    //addCompteRendu($odj, $point1, $point2, $point3, $point4, $point5, $divers ) ;
    addCompteRendu($odj, $activity, $ordreJour, $contenu) ;
    
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
                    <div class="row mt-4" >
                        <div class="col-md-3">
                            <label>Ordre du jour</label>
                        </div>
                        <div class="col-md-5">
                            <input type="textArea" name="odj" class="form-control" placeholder="Saisir l'ordre du jour">
                        </div>
                    </div>

                    <div class="row mt-4" id = "content">
                        <div class="col-md-3">
                            <!--label>Point </label-->
                        </div>
                        <div class="col-md-5">
                            <textarea name="point1" class="form-control"> Entrer du contenu... </textarea>
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
                <th class="h4">#</th>
                <th class="h3">Ordre du jour</th>
                <th class="h4">Point 1</th>
                <th class="h4">Point 2</th>
                <th class="h4">Point 3</th>
                <th class="h4">Point 4</th>
                <th class="h4">Point 5</th>
                <th class="h4">Divers</th>
            </tr>
            <?php
            $compteRendu = affichage();
            foreach ($compteRendu as $p){
                ?>
                <tr>
                    <td> <?= $p['id'] ?> </td>
                    <td> <?= $p['odj'] ?></td>
                    <td> <?= $p['point1'] ?> </td>
                    <td> <?= $p['point2'] ?> </td>
                    <td> <?= $p['point3'] ?> </td>
                    <td> <?= $p['point4'] ?> </td>
                    <td> <?= $p['point5'] ?> </td>
                    <td> <?= $p['divers'] ?> </td>
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


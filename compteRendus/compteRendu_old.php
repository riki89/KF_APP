<?php
include_once '../public/fonctions/requetes.php';
include_once '../folders/navbar.php';
include_once '../folder/header.php';



if (isset($_POST['ajouter']))
{
   header('location:compteRendu.php');
    extract($_POST);
    addCompteRendu($odj, $point1, $point2, $point3, $point4, $point5, $divers ) ;
    
}
   

?>
<html>
<head> 

	<!-- Material form subscription -->
    <div class="card mt-4 container col-md-8">

        <h5 class="card-header aqua-gradient info-color white-text text-center py-4">
            <strong>AJOUT COMPTE RENDU</strong>
        </h5>

        <!--Card content-->
        <div class="card-body">

            <!-- Form -->
            <form class="text-center" style="color: #757575;" action="#!" method="post">

                <!-- Name -->
                <div class="row mt-4" >
                    <div class="col-md-3">
                        <label>ordre du jour</label>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="odj" class="form-control" placeholder="entrer l'ordre du jour">
                    </div>
                </div>

                <div class="row mt-4" >
                    <div class="col-md-3">
                        <label>point 1</label>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="point1" class="form-control" placeholder="entrer le point1">
                    </div>
                </div>

                <div class="row mt-4" >
                    <div class="col-md-3">
                        <label>point 2</label>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="point2" class="form-control" placeholder="entrer le point2">
                    </div>
                </div>

                <div class="row mt-4" >
                    <div class="col-md-3">
                        <label>point 3</label>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="point3" class="form-control" placeholder="entrer le point3">
                    </div>
                </div>

                <div class="row mt-4" >
                    <div class="col-md-3">
                        <label>point 4</label>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="point4" class="form-control" placeholder="entrer le point4">
                    </div>
                </div>

                <div class="row mt-4" >
                    <div class="col-md-3">
                        <label>point 5</label>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="point5" class="form-control" placeholder="entrer le point 5">
                    </div>
                </div>

                <div class="row mt-4" >
                    <div class="col-md-3">
                        <label>divers</label>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="divers" class="form-control" placeholder="divers">
                    </div>
                </div>

                <!-- Sign in button -->
                <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name= "ajouter">valider</button>

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
                <th class="h3">ordre du jour</th>
                <th class="h4">point 1</th>
                <th class="h4">point 2</th>
                <th class="h4">point 3</th>
                <th class="h4">point 4</th>
                <th class="h4">point 5</th>
                <th class="h4">divers</th>
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
</html>


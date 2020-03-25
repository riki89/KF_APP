<?php
require_once 'requete.php';
require_once 'header.php';
require_once 'footer.php';



if (isset($_POST['ajouter']))
{
   header('location:kf2.php');
    extract($_POST);
    addCompteRendu($odj, $point1, $point2, $point3, $point4, $point5, $divers ) ;
    
}
   

?>
<html>
<head> 

	<!-- Material form subscription -->
<div class="card mt-4 container col-md-4" style="background: #424242" >


   <h5 class="card-header info-color white-text text-center py-4 " style="background: #33b5ff">
        <strong>Remplir les informatios suivantes</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5">

        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="#!" method="post">

            <!-- Name -->
            <div class="md-form">
                <label for="materialSubscriptionFormPasswords">ordre du jour</label>
                <input type="text" id="materialSubscriptionFormPasswords"name="odj" placeholder="entrer l'ordre du jour" class="form-control">
                
            </div>
            <div class="md-form">
                <label for="materialSubscriptionFormPasswords">point 1</label>
                <input type="text" id="materialSubscriptionFormPasswords"name="point1" placeholder="entrer le point1" class="form-control">
                
            </div>
            <div class="md-form">
                <label for="materialSubscriptionFormPasswords">point 2</label>
                <input type="text" id="materialSubscriptionFormPasswords"name="point2" placeholder="entrer le point 2" class="form-control">
                
            </div>
            <div class="col-md4">
                <label for="materialSubscriptionFormPasswords">point 3</label>
                <input type="text" id="materialSubscriptionFormPasswords"name="point3" placeholder="entrer le point3" class="form-control">
                
            </div>
            <div class="md-form">
                <label for="materialSubscriptionFormPasswords">point 4</label>
                <input type="text" id="materialSubscriptionFormPasswords"name="point4" placeholder="entrer le point4 " text align="center" class="form-control">
                
            </div>

            <!-- E-mai -->
            <div class="md-form">
              
                <label for="materialSubscriptionFormEmail">point 5</label>
                <input type="text" id="materialSubscriptionFormEmail" name ="point5" placeholder="entrer le point 5"  class="form-control">
                
            </div>
             <div class="md-form">
              
                <label for="materialSubscriptionFormEmail">divers</label>
                <input type="text" id="materialSubscriptionFormEmail" name ="divers" placeholder="entrer le divers" class="form-control">
                
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
<div class="card-body px-lg-2 pt-0" style="background: #bdb8b2">
    <table class="table table-info" style="background: #bdb8b2" >
        <tr>
            <th class="h4">#</th>
            <th class="h3">ordre du jour</th>
            <th class="h4">point1</th>
            <th class="h4">point2</th>
            <th class="h4">point3</th>
            <th class="h4">point4</th>
            <th class="h4">point5</th>
            <th class="h4">divers</th>
            
            

        </tr>
        <?php
        $personnes = affichage();
        foreach ($personnes as $p){
            ?>
            <tr>
                <td> <?= $p['id'] ?> </td>
                <td> <?= $p['ordre_du_jour'] ?></td>
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


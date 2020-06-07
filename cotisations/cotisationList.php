<?php

    include_once '../public/fonctions/requetes.php';
    include_once '../folders/navbar.php';
    include_once '../public/header.php';
    include_once 'functions.php';
    //include_once 'subNav.php';
?>
    <!--Card content-->
    <div class="card-body px-lg-2 pt-0">
        <table class="table table-info" >
            <tr>
                <th class="h4">#</th>
                <th class="h4">Membre</th>
                <th class="h4">Janvier</th>
                <th class="h4">Février</th>
                <th class="h4">Mars</th>
                <th class="h4">Avril</th>
                <th class="h4">Mai</th>
                <th class="h4">Juin</th>
                <th class="h4">Juillet</th>
                <th class="h4">Aout</th>
                <th class="h4">Septembre</th>
                <th class="h4">Octobre</th>
                <th class="h4">Novembre</th>
                <th class="h4">Decembre</th>
            </tr>
            <?php
            $pers = getPersonne();

            foreach ($pers as $p)
            {
                $cotiz = cotizByYear($p['idP'], "2020");
                //foreach ($cotiz as $c){
                    //echo $p['prenomP'].' '.$p['nomP'];
                    ?>
                    <tr>
                        <td> <?= $p['idP'] ?> </td>
                        <td> <?= $p['prenomP'].' '.$p['nomP'] ?> </td>
                        
                        <?php
                        $i = 1;
                        $truv = 0;
                        while ($i <= 12)
                        {

                           //echo "i: ".$i;
                            foreach ($cotiz as $c){
                                //echo "val: ".strcmp($i, $c['mois'])." <br>";
                                if (strcmp($i, $c['mois']) === 0)
                                {
                                    echo "<td> ".$c['montant']."</td>";
                                    $truv = 1;
                                    //echo "truv: ".$truv;
                                    $i++;
                                } else 
                                {
                                    $truv = 0;
                                }
                            }
                             
                            if ($truv == 0)
                            {
                                echo "<td> - </td>";
                                $i++; 
                            }
                            //echo "truv: ".$truv;
                           // echo "i: ".$i;
                           
                        }
                         
                        ?>
                    </tr>
            <?php
            }

            ?>
        </table>
    </div>

    <br>
    <br>
    <h5 class="card-header aqua-gradient info-color white-text text-center py-1 ">
        <strong>LISTE DES COTISATIONS</strong>
    </h5>

    

    <?php
   // include_once 'footer.php';
    ?>
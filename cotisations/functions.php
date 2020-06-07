<?php
    require_once '../public/fonctions/bdd.php';
    
    function cotizByYear($idP, $an)
    {
        global $base;
        //echo "membre: $membre annee: $an mois: $mois";
        
        $req = "select month(dateC) mois, montant 
                from cotisation
                where 1=1
                 and membre = ".$idP.
                //" and membre = ".$membre. 
                //" and month(dateC) = ".$mois.
                " and year(dateC) = ".$an
                ;
        $res =  $base->query($req)->fetchAll();
        return $res;
    }
?>
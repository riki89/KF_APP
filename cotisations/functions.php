<?php
    require_once '../public/fonctions/bdd.php';
        /*  -----------------------------------
    ----GESTION DES COTISATION-----
    -----------------------------------
    */
    
    function  getCotisation()
    {
        global $base;
        $req = "SELECT * FROM cotisation order by id desc";
        return $base->query($req)->fetchAll();

    }
    function addCotisation_old( $date, $membre , $montant, $desc)
    {
        global $base;
       // $req = "INSERT INTO cotisation VALUES (null, '$date', '$membre', '$montant', '$desc')";
        //$base -> exec($req);
   
        try {
            //code...
            //echo "Adding...".$desc. " <br>";
            //echo "today: ".date();
            $stmt = $base->prepare("INSERT INTO cotisation (id, dateC, membre, montant, description,'dateCotisation') VALUES (NULL, :dateC, :membre, :montant, :desc)");
            $stmt->bindValue(":dateC", $date);
            $stmt->bindValue(":membre", $membre);
            $stmt->bindValue(":montant", $montant);
            $stmt->bindValue(":desc", $desc);
            $stmt->bindValue(":dateCotisation", now());
            $stmt->execute();
            echo "Cotisation de " . $date. " ajoutée avec succés!";

           // $req = "INSERT INTO cotisation VALUES (null, '$date', '$membre', '$montant', '$desc')";
            //$base -> exec($req);
        } catch (PDOException $e) {
            $e->getMessage();
        } catch (Exception $e) {
            echo "General Error: Cotisation ne peut être ajoutée.<br>".$e->getMessage();
        }
     
    }

    function insertCotisation($montant)
    {
        
    }

    function addCotisation( $date, $membre , $montant, $desc, $dateSaisi)
    {
        global $base;
       // $req = "INSERT INTO cotisation VALUES (null, '$date', '$membre', '$montant', '$desc')";
        //$base -> exec($req);
   
        try {
            //code...
            //echo "Adding...".$desc. " <br>";
            //echo "today: ".date();
            $stmt = $base->prepare("INSERT INTO cotisation (id, dateC, membre, montant, description, dateCotisation) 
                    VALUES (NULL, :dateC, :membre, :montant, :desc, :dateS)");
            $stmt->bindValue(":dateC", $date);
            $stmt->bindValue(":membre", $membre);
            $stmt->bindValue(":montant", $montant);
            $stmt->bindValue(":desc", $desc);
            $stmt->bindValue(":dateS", $dateSaisi);
            $stmt->execute();
            echo "Cotisation de " . $date. " ajoutée avec succés!";

           // $req = "INSERT INTO cotisation VALUES (null, '$date', '$membre', '$montant', '$desc')";
            //$base -> exec($req);
        } catch (PDOException $e) {
            $e->getMessage();
        } catch (Exception $e) {
            echo "General Error: Cotisation ne peut être ajoutée.<br>".$e->getMessage();
        }
     
    }

    function supprimerCotisation($id)
    {
        global $base;

        return $base->exec("DELETE FROM cotisation WHERE id = $id");
    }
    function findCotizByID($id)
    {
        global $base;
        $req = "SELECT * FROM cotisation WHERE id = $id";
        return $base->query($req)->fetch();
    }

    function findLastCotiz($membre)
    {
        global $base;
        $req = "SELECT MAX(dateC) max_date FROM cotisation WHERE membre = $membre";
        return $base->query($req)->fetch();
    }

    function getNextMonth()
    {
        global $base;
        $req = "select last_day(concat( YEAR( SYSDATE()), \"-01-03\") ) next_month from DUAL";
        return $base->query($req)->fetch();
    }

    function getNextMonthV2($dateC)
    {
        global $base;
        $req = "";
        if (is_null($dateC))
        {
            return getNextMonth();
        } else 
        {
            $req  = "SELECT DATE_ADD(\"$dateC\", INTERVAL 1 MONTH) next_month FROM DUAL";
            return $base->query($req)->fetch();
        }
        return "00-00-00000" ;// sysdate();
    }

    function editCotiz($id, $date, $membre, $montant ,$desc, $date2)
    {
        global $base;
        $req = "UPDATE cotisation 
                SET dateC = '$date'
                    , membre = '$membre'
                    , montant= '$montant'
                    , description = '$desc'
                    , dateCotisation = '$date2'
                    
                 WHERE id = $id";
        return $base->exec($req);
    }

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

    
    function getTotal($membre)
    {
        global $base;
        //echo "membre: $membre";
        $req = "SELECT sum(montant) total FROM cotisation WHERE membre = $membre";
        //echo $req;
        $res =  $base->query($req)->fetch();
        //echo $res;
        return $res;
    }
    
?>
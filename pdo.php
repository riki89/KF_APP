<?php
try
 {
    $user = "root";
    $pass = 'root';
    $db = new PDO('mysql:host=localhost;dbname=kf', $user, $pass);
    //echo "Connexion avec succes!";

  } catch (PDOException $e)
  {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
  }
?>
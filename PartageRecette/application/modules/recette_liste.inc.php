<?php
  include 'config.BD.inc.php';    //connexion à la BDD

  //Requête sql
  $categorie_REQ = 'SELECT * FROM t_categorie_cat';

  try
  { $categorie_RESULT = $PDO_BDD->query($categorie_REQ); }            // Exécution de la requête sql
  catch (Exception $e)                                                 // Interception de l'erreur
  { die ('<div style="font-weight:bold; font-color:red"> Erreur : ' .$e->getMessage(). '</div>'); }


  $categorie_TAB = $categorie_RESULT->fetchALL(PDO::FETCH_ASSOC);      // Résultat de la requête dans un tab associatif
  $data['categorie'] = $categorie_TAB;                                 // Transmission à $data

?>

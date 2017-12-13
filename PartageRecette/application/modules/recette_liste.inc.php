<?php
  include 'config.BD.inc.php';    //connexion à la BDD

  //Requête sql
  $entree_REQ  = 'SELECT * FROM t_categorie_cat WHERE CAT_LABEL = "Entrées"  ';   // On récupère chaque catégorie par requête SQL
  $plat_REQ    = 'SELECT * FROM t_categorie_cat WHERE CAT_LABEL = "Plats"    ';
  $dessert_REQ = 'SELECT * FROM t_categorie_cat WHERE CAT_LABEL = "Desserts" ';

  try
  {
    $entree_RESULT  = $PDO_BDD->query($entree_REQ);                  // Exécution de la requête sql
    $plat_RESULT    = $PDO_BDD->query($plat_REQ);
    $dessert_RESULT = $PDO_BDD->query($dessert_REQ);
  }
  catch (Exception $e)                                               // Interception de l'erreur
  { die ('<div style="font-weight:bold; font-color:red"> Erreur : ' .$e->getMessage(). '</div>'); }


  $entree_TAB  = $entree_RESULT->fetchALL(PDO::FETCH_ASSOC);        // Résultat de la requête dans un tab associatif
  $plat_TAB    = $plat_RESULT->fetchALL(PDO::FETCH_ASSOC);
  $dessert_TAB = $dessert_RESULT->fetchALL(PDO::FETCH_ASSOC);

  $data['entree']  = $entree_TAB;                                   // Transmission à $data
  $data['plat']    = $plat_TAB;
  $data['dessert'] = $dessert_TAB;
?>

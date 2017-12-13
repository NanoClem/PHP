<?php
  include 'config.BD.inc.php';    //connexion à la BDD


  $current_categorie = $_REQUEST['idc'];        // id des catégories

  $recette_REQ       = 'SELECT R.RCT_TITRE, R.RCT_DESCRIPTION, R.RCT_ILLUSTRATION
                        FROM t_recette_rct R inner join tj_cat_rct C on R.RCT_ID = C.RCT_ID
                        WHERE C.CAT_ID = ' .$current_categorie;


  if(isset($current_categorie) || $current_categorie != "")
  {
    try {
      $recette_RESULT = $PDO_BDD->query($recette_REQ);
    }
    catch(Exception $e)
      {die ('<div style="font-weight:bold; font-color:red"> Erreur : ' .$e->getMessage(). '</div>'); }

    $recette_TAB = $recette_RESULT->fetchALL(PDO::FETCH_ASSOC);
    $data['recette'] = $recette_TAB;
  }
  else
    $data['recette'] = "";
?>

<?php
  include 'config.BD.inc.php';    //connexion à la BDD

  $current_recette = $_REQUEST['idr'];    // id des recettes

  $detail_REQ = 'SELECT '
?>

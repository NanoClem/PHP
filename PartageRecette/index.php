<?php
// Appeler le constructeur de Smarty
// faire un isset() pour traiter le cas de l'erreur 404

  // inclure Smarty
  require_once 'config.inc.php';

  $data = array();
  $current_page = $_GET['page'];

  while( list($key,$value) = each($_PAGES) )
  {
    if($current_page == $key)
    {
      $page = $current_page[i];
    }
  }
 ?>

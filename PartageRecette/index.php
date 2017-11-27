<?php
// Appeler le constructeur de Smarty
// faire un isset() pour traiter le cas de l'erreur 404

  require '/application/librairies/Smarty/libs/Smarty.class.php';
  require_once 'config.inc.php';

  $smarty = new Smarty();
  //$smarty -> caching = true;

  $data = array();
  $current_page = $_GET['page'];

  while( list($key,$value) = each($_PAGES) )
  {
    if(isset($current_page))  //if a page identification exist
    {
      if($current_page == 'acc')
        include('/application/modules/'.$value.'.inc.php');
    }
    else
      include('/application/modules/accueil.inc.php');
  }

  //$filtre = ( isset($current_page)?$current_page:"" );
  $smarty -> assign('data', $data);
  $smarty -> display('/application/views/modules/accueil.tpl');

  // foreach ($data['alea'] as $element) {
  //   echo "$element <br>";
  // }
?>

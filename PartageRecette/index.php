<?php
  require 'application/librairies/Smarty/libs/Smarty.class.php';
  require_once 'config.inc.php';


  $smarty = new Smarty();
  // $smarty->caching = true;
  // $smarty->lifetime = 120;
  $data = array();
  $current_page = $_GET['page'];
  $current_value = ERROR_404;

  while( list($key,$value) = each($_PAGES) )
  {
    if(isset($current_page) || $current_page != "")                                    // Si un identifiant de page existe
    {
      if($current_page == $key)
        $current_value = $value;
    }
  }
  //$filtre = ( isset($current_page)?$current_page:"" );
  include('application/modules/'.$current_value.'.inc.php');
  $smarty->assign('data', $data);
  $smarty->display('application/views/modules/'.$current_value.'.tpl');
?>

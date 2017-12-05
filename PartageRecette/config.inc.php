<?php
  $_PAGES = array('acc'   => 'accueil',
                  'connex'=> 'connexion',
                  'user'  => 'profil',
                  'detail'=> 'recette_detail',
                  'liste' => 'recette_liste');

  define("HOME_PAGE", $_PAGES['acc']);
  define("ERROR_404", $_PAGES['acc']);  //remplacer par une page dédiée au 404
 ?>

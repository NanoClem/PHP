<?php

  define('DB_HOST', 'localhost');
  define('DB_PORT', '3306');
  define('DB_DATABASE', 'recette');
  define('DB_USERNAME', 'root');      // ATTENTION
  define('DB_PASSWORD', 'root');      // param de connexion de base pour phpMyAdmin uniquement

  try
  {
    $PDO_BDD = new PDO('mysql:host='.DB_HOST. ';port='.DB_PORT. ';dbname='.DB_DATABASE, DB_USERNAME, DB_PASSWORD);
    $PDO_BDD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);      // Rapport d'erreur : émet des exceptions
    $PDO_BDD->exec("SET NAMES 'utf8'");                                     // codage utilisé
  }
  catch (Exception $e)
  {
    echo 'Erreur : ' .$e->getMessage(). '<br />';
    echo 'N° : '     .$e->getCode().    '<br />';
    exit();
  }
?>

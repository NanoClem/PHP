<?php

  // REDIRECTION 404
  function redirectionErreur404()
  {
    header('HTTP/1.0 404 Not Found');   // redirection 404
    exit();
  }

  // CONSERVATION DES DONNEES DANS UNE SESSION
  function saveInSession($data)
  {
    $_SESSION['pseudo'] = $data['pseudo'];
    $_SESSION['passwd'] = $data['passwd'];
  }

  // REDIRECTION HTML
  if( isset($_POST['pseudo']) && isset($_POST['passwd']) )                // si les id suivant existent dans $_POST
  {
    $pseudo = $_POST['pseudo'];                                           // pseudo
    $passwd = hash("md5", $_POST['passwd']);                              // mot de passe hash
    session_start();                                                      // creation ou recuperation de la session
    saveInSession(array("pseudo" => $pseudo, "passwd" => $passwd));       // sauvegarde des donnees dans la session
    header('Location: welcome.php?pseudo='.$pseudo.'&passwd='.$passwd);   // envoie des donnees via URI
    exit();
  }
  else {
    redirectionErreur404();
  }

?>

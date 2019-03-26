<?php

  // CONNEXION A LA BDD
  function connect($data)
  {
    $connexion = new mysqli($data['server'], $data['user'], $data['passwd'], $data['database']);

    if($connexion->connect_error) {
      echo('Erreur de connexion (' . $connexion->connect_errno .') '
                                   . $connexion->connect_error);
    }
    echo "Successfully connected !";
    return $connexion;
  }


  // FERMER LA CONNEXION
  function disconnect($connection)
  {
    $connection->close();
  }
?>

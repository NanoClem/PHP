<html>
  <head>
    <meta charset="utf-8" />
    <title>Welcome !</title>
  </head>

  <body>
    <div>
      <?php
        echo '<h1>Welcome '.$_GET['pseudo'].' with GET !</h1>';
        session_start();
        echo '<h1>Welcome '.$_SESSION['pseudo'].' with SESSION !</h1> <br/>';
        unset($_GET);
        // if(session_destroy()) echo "Session détruite !";
        // else echo "Impossible de détruire la session"
      ?>
    </div>
  </body>
</html>

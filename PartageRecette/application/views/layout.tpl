<!DOCTYPE html>
<html lang="fr">

  <header>
    {include 'application/views/layout/layout_entete.inc.tpl'}
  </header>

  <nav>
    {include 'application/views/nav/nav.inc.tpl'}
  </nav> <br />

  <body>
    {block name=main_content} {/block}
  </body> <br />

  <footer style="bottom:0; position:fixed;">
    {include 'application/views/layout/layout_pied.inc.tpl'}
  </footer>
</html>

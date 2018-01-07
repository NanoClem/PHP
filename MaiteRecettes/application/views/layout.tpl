<!DOCTYPE html>
<html lang="fr">

  <header>
    {include 'application/views/layout/layout_entete.inc.tpl'}
    {block name=title} {/block}
    <p style="float:rigth; position:top;">
      <a href="{base_url('/membre/deconnexion')}">Se déconnecter</a>
    </p>
  </header>

  <nav>
    {include 'application/views/nav/nav.inc.tpl'}
  </nav> <br />

  <body>
    {block name=main_content} {/block}
  </body>

  <!-- <footer style="text-align:center; bottom:0; position:fixed; width:100%; margin-top:50px; padding:13px; background-color : rgba(0,0,0,0.5);">
    {include 'application/views/layout/layout_pied.inc.tpl'}
  </footer> -->
</html>

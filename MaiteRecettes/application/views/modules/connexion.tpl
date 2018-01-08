
{extends file='application/views/layout.tpl'}

{block name=title}
  <title>Connexion</title>
{/block}

{block name=main_content}
  <form action="{base_url('/membre/connexion')}" method="post">
    <p>
      Login :        <input type="text" name="login" size="25" value="{set_value('login')}" />   <br />
                     {form_error('login')}
      Mot de passe : <input type="password" name="pwd" size="25" /> <br />
                     {form_error('pwd')}
                     <input type="submit" name="send_log" value="Connexion" />
    </p>
  </form>

  <p><a href="{base_url('/membre/inscription')}">Pas encore inscrit ?</a>
{/block}

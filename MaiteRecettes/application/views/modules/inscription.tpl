
{extends file='application/views/layout.tpl'}

{block name=main_content}
  <form action="{base_url('/membre/inscription')}" method="post">
    <p>
      Login *        : <input type="text" name="login" size="25" value="{set_value('login')}" />   <br />
                       {form_error('login')}
      Mail *         : <input type="email" name="mail" size="25" value="{set_value('mail')}" />   <br />
                       {form_error('mail')}
      Nom *          : <input type="text" name="nom" size="25" value="{set_value('nom')}" />   <br />
                       {form_error('nom')}
      Prenom *       : <input type="text" name="prenom" size="25" value="{set_value('prenom')}" />   <br />
                       {form_error('prenom')}
      Mot de passe * : <input type="password" name="pwd" size="25" /> <br />
                       {form_error('pwd')}
      Verification * : <input type="password" name="check_pwd" size="25" /> <br />
                       {form_error('check_pwd')}
      Avatar         : <input type="file" name="avatar" /> <br /> <br />
    <input type="submit" name="send_log" value="S'inscrire" />
  </p>
  </form> <br /> <br />

  <p>{foreach $error as $err} {$err} {/foreach}</p>
{/block}

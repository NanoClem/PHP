
{extends file='application/views/layout.tpl'}

{block name=title}
  <title>Profil</title>
{/block}

{block name=main_content}
  {foreach $user as $us}
    <p> Bienvenu(e) {$us->UTI_LOGIN} ! </p>
  {/foreach}
{/block}

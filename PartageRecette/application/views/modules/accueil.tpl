
{extends file='application/views/layout.tpl'}

{block name=main_content}
  <article>
    <p>Edito</p>
  </article>

  <article>
    <p>Tableau alea</p>
    <p>
      {foreach from=$data.alea item=nb_alea}
      {$nb_alea} est un nombre aléatoire <br/>
      {/foreach}
    </p>
  </article>
{/block}

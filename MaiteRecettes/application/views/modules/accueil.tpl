
{extends file='application/views/layout.tpl'}

{block name=main_content}
  <article>
    <h4>Edito</h4>
  </article> <br />

  <article>
    <h3>Aperçu des recettes</h3> <br />
    {foreach $rand_rct as $rct}
      <div style="width:70%; height:33%; border:solid 1px red; float:left; margin:10px">
        <p>{$rct->RCT_TITRE}</p>
        <p>{$rct->RCT_DESCRIPTION}</p>
        <p><img src="asset/images/media/{$rct->UTI_LOGIN}/{$rct->RCT_ILLUSTRATION}" /></p>
        <p><a href="{site_url('/recette/details/'|cat:$rct->RCT_ID)}">lire la recette</a></p>
      </div>
    {/foreach}
  </article>
{/block}

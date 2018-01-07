{extends file='application/views/layout.tpl'}

{block name=title}
  <title>Détails des recettes</title>
{/block}

<!--LES DETAILS DES RECETTES -->
{block name=main_content}
  <article>
    <div style="width:70%; height:33%; float:left; margin:10px">
      {foreach $unites as $uni}
        <h4>{$uni->RCT_TITRE}</h4>
        <ul>
          <li>Preparation : {$uni->RCT_TEMPS_PREPARATION}</li>
          <li>Cuisson : {$uni->RCT_TEMPS_CUISSON}</li>
          <li>Difficulte : {$uni->RCT_DIFFICULTE}</li>
          <li>Coût : {$uni->RCT_COUT}</li>
          <li>Personne(s) : {$uni->RCT_NBPERSONNE}</li>
        </ul>
      {/foreach}
    </div> <br />

    <hr width=50% size="1" align=left>

    {foreach $ingredients as $igd}
      <p>Recette proposée par : {$igd->UTI_LOGIN}</p>
    {/foreach}

    <hr width=50% size="1" align=left>

    <p>Ingredients :</p>
    <ul>
      {foreach $ingredients as $igd}
        <li>{$igd->IGD_LABEL}</li>
      {/foreach}
    </ul>
  </article>
{/block}

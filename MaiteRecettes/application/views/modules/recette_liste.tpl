{extends file='application/views/layout.tpl'}

{block name=title}
  <title>Catégories des recettes</title>
{/block}

{block name=main_content}
  <article>
    <h2>Catégories</h2>
    {foreach $categorie as $cat}
      <div style="width:70%; height:33%; border:solid 1px red; float:left;">
        <p><b>{$cat->CAT_LABEL}</b></p>
        <p>{$cat->CAT_DESCRIPTION}</p>
        <p><img src="asset/images/media/categories/{$cat->CAT_ILLUSTRATION}" alt="Problème de chargement de l'image"/></p>
        <p><a href="recette/recettes/{$cat->CAT_ID}">voir les recettes</a><p>
      </div>  <br />
    {/foreach}
  </article>
{/block}

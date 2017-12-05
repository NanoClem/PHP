{extends file='application/views/layout.tpl'}

{block name=main_content}
  <article>
    <h2>Catégories</h2>

    <table style="text-align:left"><tr> <th>ID</th> <th>Label</th> <th>Description</th> <th>Illustration</th> </tr>
      {foreach from=$data.categorie item=ligne}
        <tr>

          {foreach from=$ligne item=categorie}
            <td>{$categorie}</td>
          {/foreach}
          
        </tr>
      {/foreach}
    </table> <br />

<!--Boucle de base pour récupérer les données de Smarty-->
    {*foreach from=$data.categorie item = ligne*}
      {*foreach from=$ligne item = categorie*}

      {*/foreach*}
    {*/foreach*}
    <a href="#">voir les recettes</a>
  </article> <br />
{/block}

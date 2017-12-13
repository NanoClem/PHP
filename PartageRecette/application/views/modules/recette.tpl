{extends file='application/views/layout.tpl'}

<!--LES RECETTES -->
{block name=main_content}
  <article>
    <div style="width:70%; height:33%; border:solid 1px red; float:left; margin:10px">
      <table style="text-align:right">
        {foreach from=$data.recette item = ligne}
          {foreach from=$ligne item = recette}
            <tr>
              <td>{$recette}</td>
            </tr>
          {/foreach}
        {/foreach}
        <tr> <td><a href="index.php?page=detail&idr=i">lire la recette</a></td> </tr>
      </table>
    </div> <br />
  </article>
{/block}

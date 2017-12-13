{extends file='application/views/layout.tpl'}

{block name=main_content}
  <article>
    <h2>Catégories</h2>

<!--ENTREES-->
    <div style="width:70%; height:33%; border:solid 1px red; float:left; margin:10px">
      <table style="text-align:right">
        {foreach from=$data.entree item = ligne}
          {foreach from=$ligne item = entree}
            <tr>
              <td>{$entree}</td>
            </tr>
          {/foreach}
        {/foreach}
        <tr> <td><a href="index.php?page=recette&idc=1">voir les recettes</a></td> </tr>
      </table>
    </div> <br />

<!--PLATS-->
    <div style="width:70%; height:33%; border:solid 1px red; float:left; margin:10px">
      <table style="text-align:right">
        {foreach from=$data.plat item = ligne}
          {foreach from=$ligne item = plat}
            <tr>
              <td>{$plat}</td>
            </tr>
          {/foreach}
        {/foreach}
        <tr> <td><a href="index.php?page=recette&idc=2">voir les recettes</a></td> </tr>
      </table>
    </div>

<!--DESSERTS-->
    <div style="width:70%; height:33%; border:solid 1px red; margin:10px">
      <table style="text-align:right">
        {foreach from=$data.dessert item = ligne}
          {foreach from=$ligne item = dessert}
            <tr>
              <td>{$dessert}</td>
            </tr>
          {/foreach}
        {/foreach}
        <tr> <td><a href="index.php?page=recette&idc=3">voir les recettes</a></td> </tr>
      </table>
    </div>

  </article> <br />
{/block}

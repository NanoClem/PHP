{extends file='application/views/layout.tpl'}

{block name=main_content}
  <article>
    <h2>Catégories</h2>

<!--ENTREES-->
    <div style="width:70%; height:30%; border:solid 1px red; float:left">
      <table style="text-align:rigth">
        {foreach from=$data.entree item = ligne}
          {foreach from=$ligne item = entree}
            <p>{$entree}</p>
          {/foreach}
        {/foreach}
      </table>
    </div>

    <a href="#">voir les recettes</a>
  </article> <br />
{/block}

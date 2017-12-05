
{extends file='application/views/layout.tpl'}

{block name=main_content}
  <p>
    Bienvenu(e)
    {foreach from=$data.user item=username}
      {$username}
    {/foreach}
    ! <br />
  </p>
{/block}

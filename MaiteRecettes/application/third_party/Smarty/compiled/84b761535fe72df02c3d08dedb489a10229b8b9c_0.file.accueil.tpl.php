<?php
/* Smarty version 3.1.30, created on 2018-01-08 00:02:50
  from "D:\Users\Clement\Progs_files\uWampServer\www\PHP\MaiteRecettes\application\views\modules\accueil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a52b52ad961e3_27362746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84b761535fe72df02c3d08dedb489a10229b8b9c' => 
    array (
      0 => 'D:\\Users\\Clement\\Progs_files\\uWampServer\\www\\PHP\\MaiteRecettes\\application\\views\\modules\\accueil.tpl',
      1 => 1515369154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/views/layout.tpl' => 1,
  ),
),false)) {
function content_5a52b52ad961e3_27362746 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94845a52b52abe2b41_42215854', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77655a52b52ad93879_62950841', 'main_content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:application/views/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_94845a52b52abe2b41_42215854 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title>Accueil</title>
<?php
}
}
/* {/block 'title'} */
/* {block 'main_content'} */
class Block_77655a52b52ad93879_62950841 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <article>
    <h4>Edito</h4>
  </article> <br />

  <article>
    <h3>Aperçu des recettes</h3> <br />
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rand_rct']->value, 'rct');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rct']->value) {
?>
      <div style="width:70%; height:33%; border:solid 1px red; float:left; margin:10px">
        <p><?php echo $_smarty_tpl->tpl_vars['rct']->value->RCT_TITRE;?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['rct']->value->RCT_DESCRIPTION;?>
</p>
        <p><img src="asset/images/media/<?php echo $_smarty_tpl->tpl_vars['rct']->value->UTI_LOGIN;?>
/<?php echo $_smarty_tpl->tpl_vars['rct']->value->RCT_ILLUSTRATION;?>
" /></p>
        <p><a href="<?php echo site_url(('/recette/details/').($_smarty_tpl->tpl_vars['rct']->value->RCT_ID));?>
">lire la recette</a></p>
      </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </article>
<?php
}
}
/* {/block 'main_content'} */
}

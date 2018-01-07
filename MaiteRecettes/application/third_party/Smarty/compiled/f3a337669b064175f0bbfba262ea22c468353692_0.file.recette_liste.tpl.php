<?php
/* Smarty version 3.1.30, created on 2018-01-07 18:05:45
  from "D:\Users\Clement\Progs_files\uWampServer\www\PHP\CodeIgniter-3.1.6\application\views\modules\recette_liste.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5261795b0ab5_00372281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3a337669b064175f0bbfba262ea22c468353692' => 
    array (
      0 => 'D:\\Users\\Clement\\Progs_files\\uWampServer\\www\\PHP\\CodeIgniter-3.1.6\\application\\views\\modules\\recette_liste.tpl',
      1 => 1515204011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/views/layout.tpl' => 1,
  ),
),false)) {
function content_5a5261795b0ab5_00372281 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107545a52617958f531_12206947', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120515a5261795ae953_30013347', 'main_content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:application/views/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_107545a52617958f531_12206947 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title>Catégories des recettes</title>
<?php
}
}
/* {/block 'title'} */
/* {block 'main_content'} */
class Block_120515a5261795ae953_30013347 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <article>
    <h2>Catégories</h2>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorie']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
      <div style="width:70%; height:33%; border:solid 1px red; float:left;">
        <p><b><?php echo $_smarty_tpl->tpl_vars['cat']->value->CAT_LABEL;?>
</b></p>
        <p><?php echo $_smarty_tpl->tpl_vars['cat']->value->CAT_DESCRIPTION;?>
</p>
        <p><img src="asset/images/media/categories/<?php echo $_smarty_tpl->tpl_vars['cat']->value->CAT_ILLUSTRATION;?>
" alt="Problème de chargement de l'image"/></p>
        <p><a href="recette/recettes/<?php echo $_smarty_tpl->tpl_vars['cat']->value->CAT_ID;?>
">voir les recettes</a><p>
      </div>  <br />
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

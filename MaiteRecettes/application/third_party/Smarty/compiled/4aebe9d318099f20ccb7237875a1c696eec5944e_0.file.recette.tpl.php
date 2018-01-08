<?php
/* Smarty version 3.1.30, created on 2018-01-07 18:56:05
  from "D:\Users\Clement\Progs_files\uWampServer\www\PHP\CodeIgniter-3.1.6\application\views\modules\recette.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a526d4502f130_59194208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4aebe9d318099f20ccb7237875a1c696eec5944e' => 
    array (
      0 => 'D:\\Users\\Clement\\Progs_files\\uWampServer\\www\\PHP\\CodeIgniter-3.1.6\\application\\views\\modules\\recette.tpl',
      1 => 1515203990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/views/layout.tpl' => 1,
  ),
),false)) {
function content_5a526d4502f130_59194208 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_275685a526d45003949_79763836', 'title');
?>


<!--LES RECETTES -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107935a526d4502d0f5_37032249', 'main_content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:application/views/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_275685a526d45003949_79763836 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title>Liste des recettes</title>
<?php
}
}
/* {/block 'title'} */
/* {block 'main_content'} */
class Block_107935a526d4502d0f5_37032249 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <article>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recettes']->value, 'rct');
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

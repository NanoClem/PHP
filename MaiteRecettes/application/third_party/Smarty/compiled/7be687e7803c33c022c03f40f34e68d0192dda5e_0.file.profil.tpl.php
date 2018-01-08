<?php
/* Smarty version 3.1.30, created on 2018-01-08 00:49:22
  from "D:\Users\Clement\Progs_files\uWampServer\www\PHP\MaiteRecettes\application\views\modules\profil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a52c0124c5726_54662179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7be687e7803c33c022c03f40f34e68d0192dda5e' => 
    array (
      0 => 'D:\\Users\\Clement\\Progs_files\\uWampServer\\www\\PHP\\MaiteRecettes\\application\\views\\modules\\profil.tpl',
      1 => 1515369179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/views/layout.tpl' => 1,
  ),
),false)) {
function content_5a52c0124c5726_54662179 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71845a52c0124aca65_28582276', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7775a52c0124c3c29_41379466', 'main_content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:application/views/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_71845a52c0124aca65_28582276 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title>Profil</title>
<?php
}
}
/* {/block 'title'} */
/* {block 'main_content'} */
class Block_7775a52c0124c3c29_41379466 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'us');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['us']->value) {
?>
    <p> Bienvenu(e) <?php echo $_smarty_tpl->tpl_vars['us']->value->UTI_LOGIN;?>
 ! </p>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php
}
}
/* {/block 'main_content'} */
}

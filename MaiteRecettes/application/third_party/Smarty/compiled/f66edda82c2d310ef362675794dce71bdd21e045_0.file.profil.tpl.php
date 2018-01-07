<?php
/* Smarty version 3.1.30, created on 2018-01-07 18:46:40
  from "D:\Users\Clement\Progs_files\uWampServer\www\PHP\CodeIgniter-3.1.6\application\views\modules\profil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a526b10b9d548_05120166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f66edda82c2d310ef362675794dce71bdd21e045' => 
    array (
      0 => 'D:\\Users\\Clement\\Progs_files\\uWampServer\\www\\PHP\\CodeIgniter-3.1.6\\application\\views\\modules\\profil.tpl',
      1 => 1515264000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/views/layout.tpl' => 1,
  ),
),false)) {
function content_5a526b10b9d548_05120166 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112605a526b10b9b9e9_99730684', 'main_content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:application/views/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'main_content'} */
class Block_112605a526b10b9b9e9_99730684 extends Smarty_Internal_Block
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

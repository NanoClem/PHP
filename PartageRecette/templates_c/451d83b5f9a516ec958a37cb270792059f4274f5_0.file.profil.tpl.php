<?php
/* Smarty version 3.1.32-dev-38, created on 2017-11-29 12:27:43
  from 'D:\Program_files(x86)\DevTools\UwAmp\www\PartageRecette\application\views\modules\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a1ea7bfdd27d0_94973433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '451d83b5f9a516ec958a37cb270792059f4274f5' => 
    array (
      0 => 'D:\\Program_files(x86)\\DevTools\\UwAmp\\www\\PartageRecette\\application\\views\\modules\\profil.tpl',
      1 => 1511951189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1ea7bfdd27d0_94973433 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9445a1ea7bfcb0774_27258414', 'main_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'application/views/layout.tpl');
}
/* {block 'main_content'} */
class Block_9445a1ea7bfcb0774_27258414 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main_content' => 
  array (
    0 => 'Block_9445a1ea7bfcb0774_27258414',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <p>
    Bienvenu(e)
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['user'], 'username');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['username']->value) {
?>
      <?php echo $_smarty_tpl->tpl_vars['username']->value;?>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    ! <br />
  </p>
<?php
}
}
/* {/block 'main_content'} */
}
